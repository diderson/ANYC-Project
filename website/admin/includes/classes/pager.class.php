<?php

/*
	V5.08 6 Apr 2009   (c) 2000-2009 John Lim (jlim#natsoft.com). All rights reserved.
	  Released under both BSD license and Lesser GPL library license. 
	  Whenever there is any discrepancy between the two licenses, 
	  the BSD license will take precedence. 
	  Set tabs to 4 for best viewing.

  	This class provides recordset pagination with 
	First/Prev/Next/Last links. 
	
	Feel free to modify this class for your own use as
	it is very basic. To learn how to use it, see the 
	example in adodb/tests/testpaging.php.
	
	"Pablo Costa" <pablo@cbsp.com.br> implemented Render_PageLinks().
	
	Please note, this class is entirely unsupported, 
	and no free support requests except for bug reports
	will be entertained by the author.

*/

class Pager {

	var $db; 	// ADODB connection object
	var $sql; 	// sql used
	var $countSql; 	// sql used
	var $rs;	// recordset generated
	var $curr_page;	// current page number before Render() called, calculated in constructor
	var $numberOfRows;		// number of rows per page
    var $linksPerPage = 10; // number of links per page in navigation bar
    var $showPageLinks; 
	
	// Localize text strings here
	var $first = '&zwnj;&laquo;';
	var $prev = '&laquo;';
	var $next = '&raquo;';
	var $last = '&raquo;&zwnj;';
	var $moreLinks = '...';
	var $startLinks = '...';
	var $cache = 0;  #secs to cache with CachePageExecute()
	
	//Skipjack Added
	var $pageName;
	var $pageVariableName;
	var $pageLinks;	
	var $pageLinkCounter;
	var $numberOfPages;
	
	var $totalEntities;
	var $startEntities;
	var $endEntities;			
	
	//----------------------------------------------
	// constructor
	//
	// $db	adodb connection object
	// $sql	sql statement
	//		if you have multiple on 1 page. 
	//		$id should be only be [a-z0-9]*
	//
	function __construct( $sql, $countSql, $numberOfRows=10, $pageName, $showPageLinks = true ) {
	
		//Skipjack
		$this->pageName = $pageName;
		$this->numberOfRows = intval( $numberOfRows );
		$this->pageVariableName = 'page';
		$this->pageLinks = array();
		$this->pageLinkCounter = 0;
		
		$this->sql = $sql;
		$this->countSql = $countSql;		
		$db = new DB();
		$this->db = $db->getConnection();
		$this->showPageLinks = $showPageLinks;
		
		$next_page = $this->pageVariableName;	
		
		if (isset($_GET[$next_page])) {
			$this->curr_page = (integer) $_GET[$next_page];
		} else {
			$this->curr_page = 1;
		}			
		
		//Skipjack
		$this->startEntities = ( ($this->curr_page * $this->numberOfRows) - $this->numberOfRows ) + 1;
		$this->endEntities = $this->curr_page * $this->numberOfRows;
		
		$this->Render();
		unset($this->rs);
		unset($this->db);
		unset($this->sql);
				
	}
	
	//---------------------------
	// Display link to first page	
	
	//---------------------------
	// Display link to first page
	function Render_First( $anchor=true ) {
		if ($anchor) {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=1";
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->first;		
			$this->pageLinkCounter++;
		} else {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "0";
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->first;				
			$this->pageLinkCounter++;
		}
	}
	
	//--------------------------
	// Display link to next page
	function render_next( $anchor=true ) {
	
		if ($anchor) {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".($this->rs->AbsolutePage() + 1);
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->next;				
			$this->pageLinkCounter++;
		} else {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "0";
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->next;						
			$this->pageLinkCounter++;
		}
	}
	
	//------------------
	// Link to last page
	// 
	// for better performance with large recordsets, you can set
	// $this->db->pageExecuteCountRows = false, which disables
	// last page counting.
	function render_last( $anchor=true ) {
	
		if (!$this->db->pageExecuteCountRows) return;
		
		if ($anchor) {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".$this->rs->LastPageNo();
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->last;			
			$this->pageLinkCounter++;
		} else {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "0";
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->last;					
			$this->pageLinkCounter++;
		}
	}
	
	//---------------------------------------------------
	// original code by "Pablo Costa" <pablo@cbsp.com.br> 
	function render_pagelinks() {
		$pages        = $this->rs->LastPageNo();
		$linksperpage = $this->linksPerPage ? $this->linksPerPage : $pages;
		for($i=1; $i <= $pages; $i+=$linksperpage)
		{
			if($this->rs->AbsolutePage() >= $i)
			{
				$start = $i;
			}
		}
		$numbers = '';
		$end = $start+$linksperpage-1;
		if($end > $pages) $end = $pages;
		
		
		if ($this->startLinks && $start > 1) {
			$pos = $start - 1;
			
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".$pos;
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->startLinks;						
			$this->pageLinkCounter++;
		} 
		
		for($i=$start; $i <= $end; $i++) {
			if ($this->rs->AbsolutePage() == $i) {
			
				$this->pageLinks[$this->pageLinkCounter]['link'] = "0";
				$this->pageLinks[$this->pageLinkCounter]['linkName'] = $i;											
				$this->pageLinks[$this->pageLinkCounter]['currentpage'] = "1";
				$this->pageLinkCounter++;
			} else {
				$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".$i;
				$this->pageLinks[$this->pageLinkCounter]['linkName'] = $i;																 
				$this->pageLinkCounter++;
			}
		
		}
		if ($this->moreLinks && $end < $pages) {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".$i;
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->moreLinks;					
			$this->pageLinkCounter++;
		}

	}
	
	// Link to previous page
	function render_prev( $anchor=true ) {

		if ($anchor) {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "page=".($this->rs->AbsolutePage() - 1);
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->prev;	
			$this->pageLinkCounter++;
		} else {
			$this->pageLinks[$this->pageLinkCounter]['link'] = "0";
			$this->pageLinks[$this->pageLinkCounter]['linkName'] = $this->prev;		
			$this->pageLinkCounter++;
		}
	}	
	
	//-------------------------------------------------------
	// Navigation bar
	//
	// we use output buffering to keep the code easy to read.
	function RenderNav()
	{
		if (!$this->rs->AtFirstPage()) {
			$this->Render_First();
			$this->Render_Prev();
		} else {
			$this->Render_First(false);
			$this->Render_Prev(false);
		}
        if ($this->showPageLinks){
            $this->Render_PageLinks();
        }
		if (!$this->rs->AtLastPage()) {
			$this->Render_Next();
			$this->Render_Last();
		} else {
			$this->Render_Next(false);
			$this->Render_Last(false);
		}

	}				
	
	//-----------------------------------
	// Call this class to draw everything.
	function Render() {
	
		global $ADODB_COUNTRECS;	
		
		
		if ($this->db->dataProvider == 'informix') $this->db->cursorType = IFX_SCROLL;
		
		$savec = $ADODB_COUNTRECS;
		if ($this->db->pageExecuteCountRows) $ADODB_COUNTRECS = true;
		if ($this->cache) {
		
			try {
				$rs = $this->db->CachePageExecute( $this->cache, $this->sql, $this->numberOfRows, $this->curr_page );
	
				//Skipjack
				//Get total number of rows			
				$totalRs = $this->db->CacheExecute($this->countSql);
				$this->totalEntities = $totalRs->_numOfRows;			
			} catch (exception $ex) {
				$this->totalEntities = 0;
			}								
		} else {

			try {
				$rs = $this->db->PageExecute( $this->sql, $this->numberOfRows, $this->curr_page );			
				
				//Skipjack
				//Get total number of rows						
				$totalRs = $this->db->Execute($this->countSql);			
				//print_r($totalRs);
				
				$this->totalEntities = $totalRs->_numOfRows;				
				
			} catch (exception $ex) {
				$this->totalEntities = 0;
			}				
		}		
		
		$ADODB_COUNTRECS = $savec;
		
		$this->rs = $rs;
		if (!$rs) { return; }
				
		if (!$rs->EOF && (!$rs->AtFirstPage() || !$rs->AtLastPage())) {		
			$this->RenderNav();
		}						
		
		if( $this->endEntities > $this->totalEntities ) {
			$this->endEntities = $this->totalEntities;		
		}
		
		
		$this->numberOfPages = ceil( $this->totalEntities / $this->numberOfRows );
		
		$rs->Close();
		$this->rs = false;
	}
	
}


?>