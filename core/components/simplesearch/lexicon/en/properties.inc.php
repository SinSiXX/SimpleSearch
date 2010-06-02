<?php
/**
 * SimpleSearch
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of SimpleSearch, a simple search component for MODx
 * Revolution. It is loosely based off of AjaxSearch for MODx Evolution by
 * coroico/kylej, minus the ajax.
 *
 * SimpleSearch is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * SimpleSearch is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * SimpleSearch; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package simplesearch
 */
/**
 * English Properties Lexicon Topic for SimpleSearch
 *
 * @package simplesearch
 * @subpackage lexicon
 * @language en
 */
$_lang['sisea.containertpl_desc'] = 'The chunk that will be used to wrap all the search results, pagination and message.';
$_lang['sisea.contexts_desc'] = 'The contexts to search. Defaults to the current context if none are explicitly specified.';
$_lang['sisea.currentpagetpl_desc'] = 'The chunk to use for the current pagination link.';
$_lang['sisea.depth_desc'] = 'If idtype is set to parents, the depth down the Resource tree that will be searched with the specified IDs.';
$_lang['sisea.documents'] = 'Documents';
$_lang['sisea.extractellipsis_desc'] = 'The string used to wrap extract results with. Defaults to an ellipsis.';
$_lang['sisea.extractlength_desc'] = 'The number of characters for the content extraction of each search result.';
$_lang['sisea.get'] = 'GET';
$_lang['sisea.hidemenu_desc'] = 'Whether or not to return Resources that have hidemenu on. 0 shows only visible Resources, 1 shows only hidden Resources, 2 shows both.';
$_lang['sisea.hidemenu_visible'] = 'Visible Only';
$_lang['sisea.hidemenu_hidden'] = 'Hidden Only';
$_lang['sisea.hidemenu_both'] = 'Show All';
$_lang['sisea.highlightclass_desc'] = 'The CSS class name to add to highlighted terms in results.';
$_lang['sisea.highlightresults_desc'] = 'Whether or not to highlight the search term in results.';
$_lang['sisea.highlighttag_desc'] = 'The html tag to wrap the highlighted term with in search results.';
$_lang['sisea.ids_desc'] = 'A comma-separated list of IDs to restrict the search to.';
$_lang['sisea.idtype_desc'] = 'The type of restriction for the ids parameter. If parents, will add all the children of the IDs in the ids parameter to the search. If documents, will only use the specified IDs in the search.';
$_lang['sisea.landing_desc'] = 'The Resource that the SimpleSearch snippet is called on, that will display the results of the search.';
$_lang['sisea.match'] = 'Match';
$_lang['sisea.maxwords_desc'] = 'The maximum number of words to include in the search. Only applicable if useAllWords is off.';
$_lang['sisea.method_desc'] = 'Whether to send the search over POST or GET.';
$_lang['sisea.offsetindex_desc'] = 'The name of the REQUEST parameter to use for the pagination offset.';
$_lang['sisea.pagetpl_desc'] = 'The chunk to use for a pagination link.';
$_lang['sisea.pagingseparator_desc'] = 'The separator to use between pagination links.';
$_lang['sisea.parents'] = 'Parents';
$_lang['sisea.partial'] = 'Partial';
$_lang['sisea.perpage_desc'] = 'The number of search results to show per page.';
$_lang['sisea.post'] = 'POST';
$_lang['sisea.searchindex_desc'] = 'The name of the REQUEST parameter that the search will use.';
$_lang['sisea.showextract_desc'] = 'Whether or not to show an extract of the content of each search result.';
$_lang['sisea.tpl_desc'] = 'The chunk that will be used to display the contents of each search result.';
$_lang['sisea.tpl_form_desc'] = 'The chunk that will be used to display the search form.';
$_lang['sisea.toplaceholder_desc'] = 'Whether to set the output to directly return, or set to a placeholder with this propertys name.';
$_lang['sisea.useallwords_desc'] = 'If true, will only find results with all the specified search words.';
$_lang['sisea.searchstyle_desc'] = 'To search either with a partial LIKE search, or a relevance-based MATCH search.';