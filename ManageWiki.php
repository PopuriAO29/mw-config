<?php

$wgManageWikiExtensions = array(
		'addthis' => array(
			'name' => 'AddThis',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:AddThis',
			'var' => 'wmgUseAddThis',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
 		'htmlmetaadntitle' => array(
			'name' => 'HTML Meta and Title',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Add_HTML_Meta_and_Title',
			'var' => 'wmgUseAddHTMLMetaAndTitle',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'adminlinks' => array(
			'name' => 'AdminLinks',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:AdminLinks',
			'var' => 'wmgUseAdminLinks',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'ajaxpoll' => array(
			'name' => 'AJAX Poll',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:AJAXPoll',
			'var' => 'wmgUseAJAXPoll',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'apex' => array(
			'name' => 'Apex (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Apex',
			'var' => 'wmgUseApex',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articlefeedbackv5' => array(
			'name' => 'Article Feedback Tool V5',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ArticleFeedbackv5',
			'var' => 'wmgUseArticleFeedbackv5',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articleratings' => array(
			'name' => 'Article Ratings',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ArticleRatings',
			'var' => 'wmgUseArticleRatings',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'articletocategory2' => array(
			'name' => 'Article To Category 2',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ArticleToCategory2',
			'var' => 'wmgUseArticleToCategory2',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'authorprotect' => array(
			'name' => 'Author Protect',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:AuthorProtect',
			'var' => 'wmgUseAuthorProtect',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'autocreatecategorypages' => array(
			'name' => 'Auto Create Category Pages',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:AutoCreateCategoryPages',
			'var' => 'wmgUseAutoCreateCategoryPages',
			'conflicts' => false,
			'requires' => '>500 categories',
			'restricted' => true,
		),
		'blogpage' => array(
			'name' => 'Blog Page',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:BlogPage',
			'var' => 'wmgUseBlogPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'capiunto' => array(
			'name' => 'Capiunto',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Capiunto',
			'var' => 'wmgUseCapiunto',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'cargo' => array(
			'name' => 'Cargo',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Cargo',
			'var' => 'wmgUseCargo',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'charinsert' => array(
			'name' => 'CharInsert',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CharInsert',
			'var' => 'wmgUseCharInsert',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'codemirror' => array(
			'name' => 'CodeMirror',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CodeMirror',
			'var' => 'wmgUseCodeMirror',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'collapsiblevector' => array(
			'name' => 'Collapsible Vector',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CollapsibleVector',
			'var' => 'wmgUseCollapsibleVector',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'collection' => array(
			'name' => 'Collection (PDF)',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Collection',
			'var' => 'wmgUseCollection',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'comments' => array(
			'name' => 'Comments',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Comments',
			'var' => 'wmgUseComments',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'contributionscores' => array(
			'name' => 'ContributionScores',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ContributionScores',
			'var' => 'wmgUseContributionScores',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'createpage' => array(
			'name' => 'CreatePage',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CreatePage',
			'var' => 'wmgUseCreatePage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'createredirect' => array(
			'name' => 'CreateRedirect',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CreateRedirect',
			'var' => 'wmgUseCreateRedirect',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'crossreference' => array(
			'name' => 'CrossReference',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CrossReference',
			'var' => 'wmgUseCrossReference',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'css' => array(
			'name' => 'CSS',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:CSS',
			'var' => 'wmgUseCSS',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'darkvector' => array(
			'name' => 'DarkVector (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:DarkVector',
			'var' => 'wmgUseDarkVector',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'description2' => array(
			'name' => 'Description2',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Description2',
			'var' => 'wmgUseDescription2',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dplforum' => array(
			'name' => 'DPLForum',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:DPLforum',
			'var' => 'wmgUseDPLForum',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'duplicator' => array(
			'name' => 'Duplicator',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Duplicator',
			'var' => 'wmgUseDuplicator',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dusktodawn' => array(
			'name' => 'DuskToDawn (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:DuskToDawn',
			'var' => 'wmgUseDuskToDawn',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'dynamicpagelist' => array(
			'name' => 'DynamicPageList',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:DynamicPageList_(Wikimedia)',
			'var' => 'wmgUseDynamicPageList',
			'conflicts' => 'dynamicpagelist3',
			'requires' => false,
			'restricted' => false,
		),
		'dynamicpagelist3' => array(
			'name' => 'DynamicPageList3',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:DynamicPageList3',
			'var' => 'wmgUseDynamicPageList3',
			'conflicts' => 'dynamicpagelist',
			'requires' => false,
			'restricted' => false,
		),
		'editcount' => array(
			'name' => 'EditCount',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Editcount',
			'var' => 'wmgUseEditcount',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'educationprogram' => array(
			'name' => 'Education Program',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:EducationProgram',
			'var' => 'wmgUseEducationProgram',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'electronpdfservice' => array(
			'name' => 'Electron PDF Service',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ElectronPdfService',
			'var' => 'wmgUseElectronPDFService',
			'conflicts' => false,
			'requires' => 'services',
			'restricted' => true,
		),
		'erudite' => array(
			'name' => 'Erudite (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Erudite',
			'var' => 'wmgUseErudite',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'eventlogging' => array(
			'name' => 'EventLogging',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:EventLogging',
			'var' => 'wmgUseEventLogging',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'fancyboxthumbs' => array(
			'name' => 'Fancy Box Thumbs',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:FancyBoxThumbs',
			'var' => 'wmgUseFancyBoxThumbs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'flaggedrevs' => array(
			'name' => 'FlaggedRevs',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:FlaggedRevs',
			'var' => 'wmgUseFlaggedRevs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'flow' => array(
			'name' => 'Flow',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:StructuredDiscussions',
			'var' => 'wmgUseFlow',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
			'help' => 'Will start working 10-20 mins after enabling.',
		),
		'foreground' => array(
			'name' => 'Foreground (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Foreground',
			'var' => 'wmgUseForeground',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'gamepress' => array(
			'name' => 'Gamespress (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Gamepress',
			'var' => 'wmgUseGamepress',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'geocrumbs' => array(
			'name' => 'GeoCrumbs',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:GeoCrumbs',
			'var' => 'wmgUseGeoCrumbs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'geodata' => array(
			'name' => 'GeoData',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:GeoData',
			'var' => 'wmgUseGeoData',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'graph' => array(
			'name' => 'Graph',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Graph',
			'var' => 'wmgUseGraph',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'groupssidebar' => array(
			'name' => 'GroupsSidebar',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:GroupsSidebar',
			'var' => 'wmgUseGroupsSidebar',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'guidedtour' => array(
			'name' => 'GuidedTour',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:GuidedTour',
			'var' => 'wmgUseGuidedTour',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'hawelcome' => array(
			'name' => 'HAWelcome',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:HAWelcome',
			'var' => 'wmgUseHAWelcome',
			'conflicts' => 'flow',
			'requires' => false,
			'restricted' => false,
		),
		'headertabs' => array(
			'name' => 'HeaderTabs',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:HeaderTabs',
			'var' => 'wmgUseHeaderTabs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'hidesection' => array(
			'name' => 'HideSection',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:HideSection',
			'var' => 'wmgUseHideSection',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'highlightlinksincategory' => array(
			'name' => 'HighlightLinksInCategory',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Highlight_Links_in_Category',
			'var' => 'wmgUseHighlightLinksInCategory',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'imagemap' => array(
			'name' => 'ImageMap',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ImageMap',
			'var' => 'wmgUseImageMap',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'imagerating' => array(
			'name' => 'ImageRating',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ImageRating',
			'var' => 'wmgUseImageRating',
			'conflicts' => false,
			'requires' => 'voteny',
			'restricted' => false,
		),
		'javascriptslideshow' => array(
			'name' => 'Javascript Slidehow',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:JavascriptSlideshow',
			'var' => 'wmgUseJavascriptSlideshow',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'josa' => array(
			'name' => 'Josa',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Josa',
			'var' => 'wmgUseJosa',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'jsbreadcrumbs' => array(
			'name' => 'JS BreadCrumbs',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:JSBreadCrumbs',
			'var' => 'wmgUseJSBreadCrumbs',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'kartographer' => array(
			'name' => 'Kartographer',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Kartographer',
			'var' => 'wmgUseKartographer',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'labeledsectiontransclusion' => array(
			'name' => 'LabeledSectionTransclusion',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:LabeledSectionTransclusion',
			'var' => 'wmgUseLabeledSectionTransclusion',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'liberty' => array(
			'name' => 'Liberty (Skin)',
			'linkPage' => 'https://github.com/librewiki/liberty-skin',
			'var' => 'wmgUseLiberty',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'linktarget' => array(
			'name' => 'LinkTarget',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:LinkTarget',
			'var' => 'wmgUseLinkTarget',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'listings' => array(
			'name' => 'Listings',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Listings',
			'var' => 'wmgUseListings',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'loopscombo' => array(
			'name' => 'Loops',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Loops',
			'var' => 'wmgUseLoopsCombo',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'magicnocache' => array(
			'name' => 'MagicNoCache',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MagicNoCache',
			'var' => 'wmgUseMagicNoCache',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'maps' => array(
			'name' => 'Maps',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Maps',
			'var' => 'wmgUseMaps',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'masseditregex' => array(
			'name' => 'MassEditRegex',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MassEditRegex',
			'var' => 'wmgUseMassEditRegex',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'metrolook' => array(
			'name' => 'Metrolook (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Metrolook',
			'var' => 'wmgUseMetrolook',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'modernskylight' => array(
			'name' => 'ModernSkylight (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Modern_Skylight',
			'var' => 'wmgUseModernSkylight',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'mscalendar' => array(
			'name' => 'MsCalendar',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MsCalendar',
			'var' => 'wmgUseMSCalendar',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'msupload' => array(
			'name' => 'MsUpload',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MsUpload',
			'var' => 'wmgUseMsUpload',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'multimediaviewer' => array(
			'name' => 'Multimedia Viewer',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MultimediaViewer',
			'var' => 'wmgUseMultimediaViewer',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'multiboilerplate' => array(
			'name' => 'MultiBoilerplate',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:MultiBoilerplate',
			'var' => 'wmgUseMultiBoilerplate',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newestpages' => array(
			'name' => 'NewestPages',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NewestPages',
			'var' => 'wmgUseNewestPages',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'news' => array(
			'name' => 'News',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:News',
			'var' => 'wmgUseNews',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newsignuppage' => array(
			'name' => 'New Signup Page',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NewSignupPage',
			'var' => 'wmgUseNewSignupPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newsletter' => array(
			'name' => 'Newsletter',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Newsletter',
			'var' => 'wmgUseNewsletter',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'newusermessage' => array(
			'name' => 'New User Message',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NewUserMessage',
			'var' => 'wmgUseNewUserMessage',
			'conflicts' => 'flow',
			'requires' => false,
			'restricted' => false,
		),
		'newusernotif' => array(
			'name' => 'New User Nofifications',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NewUserNotif',
			'var' => 'wmgUseNewUserNotif',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'notitle' => array(
			'name' => 'NoTitle',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NoTitle',
			'var' => 'wmgUseNoTitle',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'nukedpl' => array(
			'name' => 'NukeDPL',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:NukeDPL',
			'var' => 'wmgUseNukeDPL',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'opengraphmeta' => array(
			'name' => 'OpenGraphMeta',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:OpenGraphMeta',
			'var' => 'wmgUseOpenGraphMeta',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagedtiffhandler' => array(
			'name' => 'PagedTiffHandler',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PagedTiffHandler',
			'var' => 'wmgUsePagedTiffHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pageforms' => array(
			'name' => 'Page Forms',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PageForms',
			'var' => 'wmgUsePageForms',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagenotice' => array(
			'name' => 'Page Notice',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PageNotice',
			'var' => 'wmgUsePageNotice',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pagetriage' => array(
			'name' => 'Page Triage',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PageTriage',
			'var' => 'wmgUsePageTriage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfbook' => array(
			'name' => 'PDFBook',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PdfBook',
			'var' => 'wmgUsePDFBook',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfembed' => array(
			'name' => 'PDF Embed',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PDFEmbed',
			'var' => 'wmgUsePDFEmbed',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pdfhandler' => array(
			'name' => 'PDF Handler',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PDFHandler',
			'var' => 'wmgUsePDFHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pipeescape' => array(
			'name' => 'Pipe Escape',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PipeEscape',
			'var' => 'wmgUsePipeEscape',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pivot' => array(
			'name' => 'Pivot (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Pivot',
			'var' => 'wmgUsePivot',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'popups' => array(
			'name' => 'Popups',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Popups',
			'var' => 'wmgUsePopups',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'poll' => array(
			'name' => 'Poll',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Poll',
			'var' => 'wmgUsePoll',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'pollny' => array(
			'name' => 'PollNY',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:PollNY',
			'var' => 'wmgUsePollNY',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'proofreadpages' => array(
			'name' => 'Proofread Pages',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ProofreadPage',
			'var' => 'wmgUseProofreadPage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'protectsite' => array(
			'name' => 'Protect Site',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ProtectSite',
			'var' => 'wmgUseProtectSite',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'quiz' => array(
			'name' => 'Quiz',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Quiz',
			'var' => 'wmgUseQuiz',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'quizgame' => array(
			'name' => 'Quiz Game (SocialProfile)',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:QuizGame',
			'var' => 'wmgUseQuizGame',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'randomgameunit' => array(
			'name' => 'RandomGameUnit (SocialProfile)',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RandomGameUnit',
			'var' => 'wmgUseRandomGameUnit',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'randomimage' => array(
			'name' => 'RandomImage',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RandomImage',
			'var' => 'wmgUseRandomImage',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'randomselection' => array(
			'name' => 'RandomSelection',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RandomSelection',
			'var' => 'wmgUseRandomSelection',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'refreshed' => array(
			'name' => 'Refreshed (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Refreshed',
			'var' => 'wmgUseRefreshed',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'relatedarticles' => array(
			'name' => 'Related Articles',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RelatedArticles',
			'var' => 'wmgUseRelatedArticles',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'replacetext' => array(
			'name' => 'Replace Text',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ReplaceText',
			'var' => 'wmgUseReplaceText',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'revisionslider' => array(
			'name' => 'RevisionSlider',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RevisionSlider',
			'var' => 'wmgUseRevisionSlider',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'rss' => array(
			'name' => 'RSS',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:RSS',
			'var' => 'wmgUseRSS',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'sandboxlink' => array(
			'name' => 'Sandbox Link',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SandboxLink',
			'var' => 'wmgUseSandboxLink',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'score' => array(
			'name' => 'Score',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Score',
			'var' => 'wmgUseScore',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'scratchblocks' => array(
			'name' => 'ScratchBlocks',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:ScratchBlocks',
			'var' => 'wmgUseScratchBlocks',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'simplechanges' => array(
			'name' => 'Simple Changes',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SimpleChanges',
			'var' => 'wmgUseSimpleChanges',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'simpletooltip' => array(
			'name' => 'Simple Tooltip',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SimpleTooltip',
			'var' => 'wmgUseSimpleTooltip',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'sitescout' => array(
			'name' => 'SiteScout',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SiteScout',
			'var' => 'wmgUseSiteScout',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'socialprofile' => array(
			'name' => 'SocialProfile',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SocialProfile',
			'var' => 'wmgUseSocialProfile',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'spoilers' => array(
			'name' => 'Spoilers',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Spoilers',
			'var' => 'wmgUseSpoilers',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'subpagefun' => array(
			'name' => 'SubPageFun',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Subpage_Fun',
			'var' => 'wmgUseSubpageFun',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'subpagelist3' => array(
			'name' => 'SubPageList3',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:SubPageList3',
			'var' => 'wmgUseSubPageList3',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'tabscombination' => array(
			'name' => 'TabsCombination (Tabber + Tabs)',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Tabs',
			'var' => 'wmgUseTabsCombination',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'templatesandbox' => array(
			'name' => 'Template Sandbox',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TemplateSandbox',
			'var' => 'wmgUseTemplateSandbox',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'templatestyles' => array(
			'name' => 'Template Styles',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TemplateStyles',
			'var' => 'wmgUseTemplateStyles',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'theme' => array(
			'name' => 'Theme',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Theme',
			'var' => 'wmgUseTheme',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'timedmediahandler' => array(
			'name' => 'TimedMediaHandler',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TimedMediaHandler',
			'var' => 'wmgUseTimedMediaHandler',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'titlekey' => array(
			'name' => 'TitleKey',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TitleKey',
			'var' => 'wmgUseTitleKey',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'toctree' => array(
			'name' => 'TOC Tree',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TocTree',
			'var' => 'wmgUseTocTree',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'translate' => array(
			'name' => 'Translate',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Translate',
			'var' => 'wmgUseTranslate',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'tweeki' => array(
			'name' => 'Tweeki (Skin)',
			'linkPage' => 'https://mediawiki.org/wiki/Skin:Tweeki',
			'var' => 'wmgUseTweeki',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'twocolconflict' => array(
			'name' => 'TwoColConflict',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:TwoColConflict',
			'var' => 'wmgUseTwoColConflict',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'universallanguageselector' => array(
			'name' => 'UniversalLanguageSelector',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:UniversalLanguageSelector',
			'var' => 'wmgUseUniversalLanguageSelector',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'uploadslink' => array(
			'name' => 'UploadsLink',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:UploadsLink',
			'var' => 'wmgUseUploadsLink',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'urlgetparameters' => array(
			'name' => 'UrlGetParamters',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:UrlGetParameters',
			'var' => 'wmgUseUrlGetParameters',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'userwelcome' => array(
			'name' => 'UserWelcome',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:UserWelcome',
			'var' => 'wmgUseUserWelcome',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'variables' => array(
			'name' => 'Variable',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Variables',
			'var' => 'wmgUseVariables',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'voteny' => array(
			'name' => 'VoteNY',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:VoteNY',
			'var' => 'wmgUseVoteNY',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'visualeditor' => array(
			'name' => 'VisualEditor',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:VisualEditor',
			'var' => 'wmgUseVisualEditor',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
			'help' => 'Will start working 10-20 mins after enabling.',
		),
		'widgets' => array(
			'name' => 'Widgets',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Widgets',
			'var' => 'wmgUseWidgets',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikibaserepository' => array(
			'name' => 'Wikibase (Repository)',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:Wikibase',
			'var' => 'wmgUseWikibaseRepository',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikidatapagebanner' => array(
			'name' => 'WikidataPageBanner',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:WikidataPageBanner',
			'var' => 'wmgUseWikidataPageBanner',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikiforum' => array(
			'name' => 'WikiForum',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:WikiForum',
			'var' => 'wmgUseWikiForum',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikilove' => array(
			'name' => 'WikiLove',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:WikiLove',
			'var' => 'wmgUseWikiLove',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'wikitextloggedinout' => array(
			'name' => 'WikiText Logged In Out',
			'linkPage' => 'https://mediawiki.org/wiki/Extension:WikiTextLoggedInOut',
			'var' => 'wmgUseWikiTextLoggedInOut',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
		'youtube' => array(
			'name' => 'YouTube',
			'linkPage' => 'https://github.com/miraheze/YouTube',
			'var' => 'wmgUseYouTube',
			'conflicts' => false,
			'requires' => false,
			'restricted' => false,
		),
);

/**
 * ManageWiki settings are added using the variable below.
 *
 * Type can be either: check, list, list-multi, matrix, text, url or wikipage.
 *
 * check: adds a checkbox.
 * list: adds a list of options (requires: options which is an array in form of display => internal value).
 * list-multi: see above, just that multiple can be selected.
 * matrix: adds an array of "columns" and "rows". Columns are the top array and rows will be the values.
 * text: adds a single line text entry.
 * url: adds a single line text entry which requires a full URL.
 * wikipage: add a textbox which will return an autocomplete drop-down list of wikipages. Returns standardised MediaWiki pages.
 *
 * Other variables that are required are name and requires.
 *
 * name: the displayed name of the setting on Special:ManageWiki.
 * requires: a text entry of which extension is required for this setting to work.
 * overridedefault: a string/array override default when no existing value exist.
 * restricted: boolean - requires managewiki-restricted to change.
 */
$wgManageWikiSettings = array(
        'wgAppleTouchIcon' => array(
                'name' => 'Apple Touch Icon',
                'requires' => false,
                'restricted' => false,
                'type' => 'text',
                'overridedefault' => null,
                'help' => 'Format example: //static.miraheze.org/metawiki//3/35/Miraheze_Logo.svg',
        ),
	'wgDefaultSkin' => array(
		'name' => 'Default Skin',
		'requires' => false,
		'restricted' => false,
		'type' => 'list',
		'options' => array(
			'CologneBlue' => 'cologneblue',
			'Modern' => 'modern',
			'MonoBook' => 'monobook',
			'Timeless' => 'timeless',
			'Vector' => 'vector',
		),
		'overridedefault' => 'vector',
		'help' => false,
	),
	'wgFavicon' => array(
		'name' => 'Favicon',
		'requires' => false,
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => null,
		'help' => 'Format example: //static.miraheze.org/metawiki//3/35/Miraheze_Logo.svg',
	),
	'wgLocaltimezone' => array(
		'name' => 'Timezone',
		'requires' => false,
		'restricted' => false,
		'type' => 'timezone',
		'overridedefault' => 'UTC',
		'help' => false,
	),
	'wgLogo' => array(
		'name' => 'Logo',
		'requires' => false,
		'restricted' => false,
		'type' => 'text',
		'overridedefault' => null,
		'help' => 'The logo should be smaller than 135x135 in order for it to display properly. Format example: //static.miraheze.org/metawiki//3/35/Miraheze_Logo.svg',
	),
	'wgServer' => array(
		'name' => 'Custom Domain',
		'requires' => false,
		'restricted' => true,
		'type' => 'text',
		'overridedefault' => null,
		'help' => 'This sets your custom domain. Otherwise it defaults to submdomain.miraheze.org.',
	),
	'wmgWikiLicense' => array(
		'name' => 'Content License',
		'requires' => false,
		'restricted' => false,
		'type' => 'list',
		'options' => array(
			'All Rights Reserved' => 'arr',
			'Creative Commons BY 4.0' => 'cc-by',
			'Creative Commons BY-NC 4.0' => 'cc-by-nc',
			'Creative Commons BY-ND 4.0' => 'cc-by-nd',
			'Creative Commons BY-SA 4.0' => 'cc-by-sa',
			'Creative Commons BY-SA 2.0 Korea' => 'cc-by-sa-2-0-kr',
			'Creative Commons BY-SA-NC 4.0' => 'cc-by-sa-nc',
			'Creative Commons BY-NC-ND 4.0' => 'cc-by-nc-nd',
			'Public Domain' => 'cc-pd',
			'No license provided' => 'empty',
		),
		'overridedefault' => 'cc-by-sa',
		'help' => false,
	),
);
