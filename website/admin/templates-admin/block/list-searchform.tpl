{strip}
{if $pageObject->searchEnabled eq '1'}
<input type="submit" class="input-submit button-search" id="button-search" name="button-search" value="Search" /> <input type="submit" class="input-submit button-search" id="button-clear-search" name="button-clear-search" value="Clear" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" id="input-radio-search-and" class="input-radio-search" name="search_data[search_boolean]" value="and" {if $search_data.search_boolean eq 'and' || $setBoolean eq 'and'} checked="checked"{/if} />
<label for="input-radio-search-and">&nbsp;and</label>
<input type="radio" id="input-radio-search-or" class="input-radio-search" name="search_data[search_boolean]" value="or" {if ($setBoolean eq '' && $search_data.search_boolean eq '') || $search_data.search_boolean eq 'or' || $setBoolean eq 'or'} checked="checked"{/if} /><label for="input-radio-search-or">&nbsp;or</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" id="input-radio-search-like" class="input-radio-search" name="search_data[search_equality]" value="like" {if $search_data.search_equality eq '' or $search_data.search_equality eq 'like'} checked="checked"{/if} /><label for="input-radio-search-like">&nbsp;like</label>
<input type="radio" id="input-radio-search-equal" class="input-radio-search" name="search_data[search_equality]" value="equalto" {if $search_data.search_equality eq 'equalto'} checked="checked"{/if} /><label for="input-radio-search-equal">&nbsp;equal to</label>
<input type="hidden" name="search_data[perform_list_search]" value="{$performListSearch}" />
{/if}
{/strip}