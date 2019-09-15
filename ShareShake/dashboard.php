<?php
include('include\header.inc.php');
hasAccess();

$users = getAllUsers();
?>

<div class="starter-template">
    <h1>List of users</h1>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last Access</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($users as $user):?>
        <tr>
            <td><?php echo $user[0]?></td>
            <td><?php echo $user[1]?></td>
            <td><?php echo $user[3]?></td>
            <td>
                <a href="userCRUD.php?id=<?php echo $user[0]?>&action=edit"  class="btn btn-primary"">Edit</a>
                <a href="userCRUD.php?id=<?php echo $user[0]?>&action=delete" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    <?php endforeach;?>

    </tbody>
</table>
</div>

<?php
include('include\footer.inc.php');
?>




<div class="fes-pagelet">
    <div data-fes-id="header">
        <header class="headerElement-1313962885" data-reactroot="">
            <div class="printLogo-5987815">
                <div class="logo-2187893004">
                    <a class="logoLink-1274869959" href="/" title="Kijiji">
                        <svg aria-labelledby="kijiji-logo-title" class="icon-3484217708 logoLinkIcon-2671770022" focusable="false" height="100%" role="img" width="100%">
                            <title id="kijiji-logo-title">Kijiji</title>
                            <use xlink:href="#kijiji-logo"></use>
                        </svg>
                        <svg aria-labelledby="kijiji-logo-mobile-title" class="icon-3484217708 logoLinkIconMobile-2946637794" focusable="false" height="100%" role="img" width="100%">
                            <title id="kijiji-logo-mobile-title">Kijiji</title>
                            <use xlink:href="#kijiji-logo-mobile"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="overlay-3058225582">

            </div>
            <div class="headerContainer-640323838">
                <div class="logoBarWrapper-2167347424">
                    <div class="logoBar-1472708689">
                        <div class="logo-2187893004">
                            <a class="logoLink-1274869959" href="/" title="Kijiji">
                                <svg aria-labelledby="kijiji-logo-title" class="icon-3484217708 logoLinkIcon-2671770022" focusable="false" height="100%" role="img" width="100%">
                                    <title id="kijiji-logo-title">Kijiji</title>
                                    <use xlink:href="#kijiji-logo"></use>
                                </svg>
                                <svg aria-labelledby="kijiji-logo-mobile-title" class="icon-3484217708 logoLinkIconMobile-2946637794" focusable="false" height="100%" role="img" width="100%">
                                    <title id="kijiji-logo-mobile-title">Kijiji</title>
                                    <use xlink:href="#kijiji-logo-mobile"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="headerTools-1605513253"><div class="headerLinks-3989845123">
                                <a class="headerLink-3022157775" rel="nofollow noopener noreferrer" title="Help Desk" data-qa-id="header-link-help" href="https://help.kijiji.ca/helpdesk/">Help Desk</a>
                                <a href="/?siteLocale=fr_CA" class="headerLinkLanguage-1313557374" rel="nofollow" title="Français" data-qa-id="language-toggle">fr</a></div><div class="headerButtons-1035545103">
                                <div class="headerButton-422534423">
                                    <a class="headerButtonIconLink-3809070316" data-qa-id="header-link-my-messages" rel="nofollow noopener noreferrer" title="My Messages" href="/m-msg-my-messages/">
                                        <svg class="icon-3484217708" focusable="false" height="100%" role="img" width="100%"><use xlink:href="#icon-messages"></use></svg>
                                        <div class="messagesUnreadCount-2069966878"></div>
                                    </a>
                                </div>
                                <div class="headerButtonAnonymous-4125936145">
                                    <a href="/t-user-registration.html" class="headerButtonAnonymousLink-2729586352 headerButtonAnonymousLink__register-5987815" rel="nofollow" title="Register">Register</a>
                                    <span class="headerButtonAnonymousOr-5987815">or</span>
                                    <a href="/t-login.html" class="headerButtonAnonymousLink-2729586352" rel="nofollow" title="Sign In">Sign In</a>
                                </div>
                                <a class="headerButtonPostAd-4068432994" rel="nofollow noopener noreferrer" title="Post Ad" data-qa-id="header-link-post-ad" href="/p-select-category.html">Post Ad</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searchBarWrapper-3699875736">
                    <form class="searchBar-1167623326" action="/b-search.html">
                        <input type="hidden" name="formSubmit" value="true"/>
                        <input type="hidden" name="adIdRemoved" value=""/>
                        <input type="hidden" name="adPriceType" value=""/>
                        <input type="hidden" name="brand" value=""/>
                        <input type="hidden" name="carproofOnly" value="false"/>
                        <input type="hidden" name="categoryId" value="0"/>
                        <input type="hidden" name="categoryName" value=""/>
                        <input type="hidden" name="cpoOnly" value="false"/>
                        <input type="hidden" name="dc" value="true"/>
                        <input type="hidden" name="gpTopAd" value="false"/>
                        <input type="hidden" name="highlightOnly" value="false"/>
                        <input type="hidden" name="ll" value=""/>
                        <input type="hidden" name="locationId" value="1700272"/>
                        <input type="hidden" name="minPrice" value=""/>
                        <input type="hidden" name="maxPrice" value=""/>
                        <input type="hidden" name="origin" value=""/>
                        <input type="hidden" name="pageNumber" value="1"/>
                        <input type="hidden" name="searchView" value="LIST"/>
                        <input type="hidden" name="sortByName" value="dateDesc"/>
                        <input type="hidden" name="userId" value=""/>
                        <input type="hidden" name="urgentOnly" value="false"/>
                        <div class="formFieldKeyword-563805108">
                            <label class="searchLabel-3098788535" for="SearchKeyword">Search</label>
                            <input type="text" class="inputKeyword-283248593" data-qa-id="header-field-keyword" id="SearchKeyword" name="keywords" placeholder="Search for anything..." autoComplete="off" value=""/>
                            <div></div>
                        </div>
                        <div class="formFieldCategory-1176395532">
                            <label class="searchLabel-3098788535" for="SearchCategory">Categories</label>
                            <select class="selectCategory-3974990225" id="SearchCategory" name="SearchCategory">
                                <option selected="" value="0">All Ads</option>
                                <option value="10">Buy &amp; Sell</option><option value="72">Services</option>
                                <option value="27">Cars &amp; Vehicles</option><option value="112">Pets</option>
                                <option value="800">Vacation Rentals</option><option value="1">Community</option>
                                <option value="34">Real Estate</option>
                                <option value="45">Jobs</option>
                            </select>
                            <svg class="icon-3484217708 selectCategoryIcon-3769531166" focusable="false" height="100%" role="img" width="100%">
                                <use xlink:href="#icon-dropdown"></use>
                            </svg>
                        </div>
                        <div class="formFieldLocationPicker-195107693">
                            <label class="searchLabel-3098788535" for="SearchLocationPicker">Location</label>
                            <input type="text" class="inputLocationPicker-1341120872" id="SearchLocationPicker" name="SearchLocationPicker" placeholder="Select location..." value="" readonly=""/>
                            <svg class="icon-3484217708 inputLocationPickerIcon-3769531166" focusable="false" height="100%" role="img" width="100%">
                                <use xlink:href="#icon-dropdown">

                                </use>
                            </svg>
                            <div class="locationListContainer-3610177299">

                            </div>
                        </div>
                        <button class="searchSubmit-3567433154" data-qa-id="header-button-submit" name="SearchSubmit" type="submit" title="Find what you are looking for">
                            <svg aria-labelledby="icon-search-title" class="icon-3484217708 searchSubmitIcon-1279563002" focusable="false" height="100%" role="img" width="100%">
                                <title id="icon-search-title">Find what you are looking for</title>
                                <use xlink:href="#icon-search"></use>
                            </svg>
                            <span class="searchSubmitText-533534801">Find what you are looking for</span>
                        </button>
                    </form>
                </div>
            </div>
        </header>
    </div>
    <script type="text/javascript">if(rehydrate===undefined){var rehydrate={};}rehydrate["header"]={componentPath:"Shared/Header/Header",props:{}};</script>
</div>
