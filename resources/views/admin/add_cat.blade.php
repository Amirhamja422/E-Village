@extends('admin.admin_layoutes')
@section('admin.content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/spectrum/spectrum.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="../css/starlight.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> starlight</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="index.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="widgets.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Cards &amp; Widgets</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Charts</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="chart-morris.html" class="nav-link">Morris Charts</a></li>
          <li class="nav-item"><a href="chart-flot.html" class="nav-link">Flot Charts</a></li>
          <li class="nav-item"><a href="chart-chartjs.html" class="nav-link">Chart JS</a></li>
          <li class="nav-item"><a href="chart-rickshaw.html" class="nav-link">Rickshaw</a></li>
          <li class="nav-item"><a href="chart-sparkline.html" class="nav-link">Sparkline</a></li>
        </ul>
        <a href="#" class="sl-menu-link active show-sub">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Forms</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="form-elements.html" class="nav-link active">Form Elements</a></li>
          <li class="nav-item"><a href="form-layouts.html" class="nav-link">Form Layouts</a></li>
          <li class="nav-item"><a href="form-validation.html" class="nav-link">Form Validation</a></li>
          <li class="nav-item"><a href="form-wizards.html" class="nav-link">Form Wizards</a></li>
          <li class="nav-item"><a href="form-editor-text.html" class="nav-link">Text Editor</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">UI Elements</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="accordion.html" class="nav-link">Accordion</a></li>
          <li class="nav-item"><a href="alerts.html" class="nav-link">Alerts</a></li>
          <li class="nav-item"><a href="buttons.html" class="nav-link">Buttons</a></li>
          <li class="nav-item"><a href="cards.html" class="nav-link">Cards</a></li>
          <li class="nav-item"><a href="icons.html" class="nav-link">Icons</a></li>
          <li class="nav-item"><a href="modal.html" class="nav-link">Modal</a></li>
          <li class="nav-item"><a href="navigation.html" class="nav-link">Navigation</a></li>
          <li class="nav-item"><a href="pagination.html" class="nav-link">Pagination</a></li>
          <li class="nav-item"><a href="popups.html" class="nav-link">Tooltip &amp; Popover</a></li>
          <li class="nav-item"><a href="progress.html" class="nav-link">Progress</a></li>
          <li class="nav-item"><a href="spinners.html" class="nav-link">Spinners</a></li>
          <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-bookmarks-outline tx-20"></i>
            <span class="menu-item-label">Tables</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="table-basic.html" class="nav-link">Basic Table</a></li>
          <li class="nav-item"><a href="table-datatable.html" class="nav-link">Data Table</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
            <span class="menu-item-label">Maps</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="map-google.html" class="nav-link">Google Maps</a></li>
          <li class="nav-item"><a href="map-vector.html" class="nav-link">Vector Maps</a></li>
        </ul>
        <a href="mailbox.html" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
          <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
          <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">Jane<span class="hidden-md-down"> Doe</span></span>
              <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="../img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #notifications -->

      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Elements</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Form Elements</h5>
          <p>Forms are used to collect user information with different element types of input, select, checkboxes, radios and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Form Input</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic form control with disabled and readonly mode.</p>

          <div class="row">
            <div class="col-lg">
              <input class="form-control" placeholder="Input box" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <input class="form-control" placeholder="Input box (readonly)" readonly="" type="text">
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <input class="form-control" placeholder="Input box (disabled)" disabled="" type="text">
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-lg">
              <textarea rows="3" class="form-control" placeholder="Textarea"></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <textarea rows="3" class="form-control" placeholder="Textarea (readonly)" readonly></textarea>
            </div><!-- col -->
            <div class="col-lg mg-t-10 mg-lg-t-0">
              <textarea rows="3" class="form-control" placeholder="Texarea (disabled)" disabled></textarea>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;input class="form-control" placeholder="Input box" type="text"&gt;
&lt;input class="form-control" placeholder="Input box" type="text" readonly&gt;
&lt;input class="form-control" placeholder="Input box" type="text" disabled&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Valid State Input</h6>
          <p class="mg-b-20 mg-sm-b-30">A form control with success, warning and error state.</p>

          <div class="row">
            <div class="col-lg">
              <div class="form-group has-success mg-b-0">
                <input class="form-control is-valid" placeholder="Input box (success state)" type="text">
                <textarea rows="3" class="form-control is-valid mg-t-20" placeholder="Textarea (success state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-lg mg-t-20 mg-lg-t-0">
              <div class="form-group has-warning mg-b-0">
                <input class="form-control is-warning" placeholder="Input box (warning state)" type="text">
                <textarea rows="3" class="form-control is-warning mg-t-20" placeholder="Textarea (warning state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col-lg mg-t-20 mg-lg-t-0">
              <div class="form-group has-danger mg-b-0">
                <input class="form-control is-invalid" placeholder="Input box (danger state)" type="text">
                <textarea rows="3" class="form-control is-invalid mg-t-20" placeholder="Textarea (danger state)"></textarea>
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;input class="form-control is-valid" placeholder="Input box" type="text"&gt;
&lt;input class="form-control is-warning" placeholder="Input box" type="text"&gt;
&lt;input class="form-control is-invalid" placeholder="Input box" type="text"&gt;</code></pre>


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Custom Checkboxes and Radios</h6>
          <p class="mg-b-20 mg-sm-b-30">A custom styled checkboxes and radios.</p>

          <div class="row">
            <div class="col-lg-3">
              <label class="ckbox">
                <input type="checkbox"><span>Checkbox Unchecked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="ckbox">
                <input type="checkbox" checked><span>Checkbox Checked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="ckbox">
                <input type="checkbox" disabled><span>Checkbox Disabled</span>
              </label>
            </div><!-- col-3 -->
          </div><!-- row -->

          <div class="row mg-t-10">
            <div class="col-lg-3">
              <label class="rdiobox">
                <input name="rdio" type="radio">
                <span>Radio Unchecked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="rdiobox">
                <input name="rdio" type="radio" checked>
                <span>Radio Checked</span>
              </label>
            </div><!-- col-3 -->
            <div class="col-lg-3 mg-t-20 mg-lg-t-0">
              <label class="rdiobox">
                <input name="rdio" type="radio" disabled>
                <span>Radio Disabled</span>
              </label>
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Checkbox Source Code</p>
        <pre><code class="html pd-20">&lt;label class=&quot;ckbox&quot;&gt;
  &lt;input type=&quot;checkbox&quot;&gt;
  &lt;span&gt;Checkbox Unchecked&lt;/span&gt;
&lt;/label&gt;</code></pre>

<p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Radiobox Source Code</p>
<pre><code class="html pd-20">&lt;label class=&quot;rdiobox&quot;&gt;
  &lt;input name=&quot;rdio&quot; type=&quot;radio&quot;&gt;
  &lt;span&gt;Radio Unchecked&lt;/span&gt;
&lt;/label&gt;</code></pre>


          <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Custom Select Box</h6>
            <p class="mg-b-20 mg-sm-b-30">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options. </p>

            <div class="row">
              <div class="col-lg-4">
                <select class="form-control select2" data-placeholder="Choose one">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <select class="form-control select2" data-placeholder="Choose one (disabled)" disabled>
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="row mg-t-20">
              <div class="col-lg-4">
                <select class="form-control select2" data-placeholder="Choose one (with optgroup)">
                  <option label="Choose one"></option>
                  <optgroup label="Pacific Time Zone">
                    <option value="CA">California</option>
                    <option value="NV">Nevada</option>
                    <option value="OR">Oregon</option>
                    <option value="WA">Washington</option>
                  </optgroup>
                  <optgroup label="Mountain Time Zone">
                    <option value="AR">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MO">Montana</option>
                  </optgroup>
                  <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="KA">Kansas</option>
                    <option value="KE">Kentucky</option>
                    <option value="OK">Oklahoma</option>
                  </optgroup>
                </select>
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <select class="form-control select2" data-placeholder="Choose Browser" multiple>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome selected">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera" selected>Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <select class="form-control select2" data-placeholder="Choose Browser" multiple disabled>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome selected">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera" selected>Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div><!-- col-sm-4 -->
            </div><!-- row -->

            <div class="row pd-t-20">
              <div class="col-lg-4">
                <div class="form-group has-success mg-b-0">
                  <select class="form-control select2" data-placeholder="Choose Browser">
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group has-warning mg-b-0">
                  <select class="form-control select2" data-placeholder="Choose Browser">
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col-4 -->
              <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                <div class="form-group has-danger mg-b-0">
                  <select class="form-control select2" data-placeholder="Choose Browser">
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                  </select>
                </div><!-- form-group -->
              </div><!-- col-4 -->
            </div><!-- row -->
          </div><!-- card -->

          <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
          <pre><code class="html pd-20">&lt;select class=&quot;form-control select2&quot; data-placeholder=&quot;Choose Browser&quot;&gt;
  &lt;option value=&quot;Firefox&quot;&gt;Firefox&lt;/option&gt;
  &lt;option value=&quot;Chrome&quot;&gt;Chrome&lt;/option&gt;
  &lt;option value=&quot;Safari&quot;&gt;Safari&lt;/option&gt;
  &lt;option value=&quot;Opera&quot;&gt;Opera&lt;/option&gt;
  &lt;option value=&quot;Internet Explorer&quot;&gt;Internet Explorer&lt;/option&gt;
&lt;/select&gt;</code></pre>


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">File Browser</h6>
          <p class="mg-b-20 mg-sm-b-30">A custom styled file browser.</p>

          <div class="row">
            <div class="col-lg-3">
              <label class="custom-file">
                <input type="file" id="file" class="custom-file-input">
                <span class="custom-file-control"></span>
              </label>
            </div><!-- col -->
            <div class="col-lg-3 mg-t-40 mg-lg-t-0">
              <label class="custom-file">
                <input type="file" id="file2" class="custom-file-input">
                <span class="custom-file-control custom-file-control-primary"></span>
              </label>
            </div><!-- col -->
            <div class="col-lg-3 mg-t-40 mg-lg-t-0">
              <label class="custom-file">
                <input type="file" class="custom-file-input">
                <span class="custom-file-control custom-file-control-inverse"></span>
              </label>
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;label class=&quot;custom-file&quot;&gt;
  &lt;input type=&quot;file&quot; id=&quot;file&quot; class=&quot;custom-file-input&quot;&gt;
  &lt;span class=&quot;custom-file-control&quot;&gt;&lt;/span&gt;
&lt;/label&gt;</code></pre>


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Input Groups</h6>
          <p class="mg-b-20 mg-sm-b-30">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>

          <div class="row">
            <div class="col-lg-4">
              <div class="input-group">
                <span class="input-group-addon"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                <input type="text" class="form-control" placeholder="Username">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username">
                <span class="input-group-addon tx-size-sm lh-2">@ex.com</span>
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <span class="input-group-addon tx-size-sm lh-2">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon tx-size-sm lh-2">.00</span>
              </div>
            </div><!-- col-sm-4 -->
          </div><!-- row -->

          <div class="row pd-t-20">
            <div class="col-lg-4">
              <div class="input-group">
                <span class="input-group-addon bg-transparent">
                  <label class="ckbox wd-16">
                    <input type="checkbox"><span></span>
                  </label>
                </span>
                <input type="text" class="form-control" placeholder="Text input with checkbox">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <span class="input-group-addon bg-transparent">
                  <label class="rdiobox wd-16">
                    <input type="radio"><span></span>
                  </label>
                </span>
                <input type="text" class="form-control" placeholder="Text input with radio">
              </div>
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn bd bg-white tx-gray-600" type="button"><i class="fa fa-search"></i></button>
                </span>
              </div><!-- input-group -->
            </div><!-- col-4 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;icon ion-person tx-16 lh-0 op-6&quot;&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot;&gt;
&lt;/div&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Date Picker</h6>
          <p class="mg-b-20 mg-sm-b-30">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.</p>

          <p class="mg-b-10">Default Functionality</p>
          <div class="wd-200">
            <div class="input-group">
              <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
              <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
            </div>
          </div><!-- wd-200 -->

          <p class="mg-b-10 mg-t-30">Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
          <div class="wd-200">
            <div class="input-group">
              <span class="input-group-addon"><i class="icon ion-calendar tx-16 lh-0 op-6"></i></span>
              <input id="datepickerNoOfMonths" type="text" class="form-control" placeholder="MM/DD/YYYY">
            </div>
          </div><!-- wd-200 -->

          <p class="mg-t-30 mg-b-10">Display the datepicker embedded in the page instead of in an overlay.</p>
          <div class="fc-datepicker"></div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;input-group&quot;&gt;
  &lt;span class=&quot;input-group-addon&quot;&gt;&lt;i class=&quot;icon ion-calendar tx-16 lh-0 op-6&quot;&gt;&lt;/i&gt;&lt;/span&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control fc-datepicker&quot; placeholder=&quot;MM/DD/YYYY&quot;&gt;
&lt;/div&gt;</code></pre><br>

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="javascript pd-20">$('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });</code></pre><br>

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="javascript pd-20">&lt;div class="fc-datepicker"&gt;&lt;/div&gt;</code></pre>


        <div class="bg-white pd-40 mg-t-50">
          <h6 class="card-body-title mg-b-30">Color Picker</h6>

          <p class="mg-b-10 tx-gray-600">A simple component to select color in the same way you select color in Adobe Photoshop.</p>
          <input type="text" id="colorpicker">

          <p class="mg-b-10 mg-t-30">You can allow alpha transparency selection. Check out these example.</p>
          <input type="text" id="showAlpha">

          <p class="mg-b-10 mg-t-30">Show pallete only. If you'd like, spectrum can show the palettes you specify, and nothing else.</p>
          <input type="text" id="showPaletteOnly">
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">$('#colorpicker').spectrum({
  color: '#17A2B8'
});</code></pre>
<pre><code class="javascript pd-20">$('#showAlpha').spectrum({
  color: 'rgba(23,162,184,0.5)',
  showAlpha: true
});</code></pre>
<pre class="mg-b-0"><code class="javascript pd-20">$('#showPaletteOnly').spectrum({
  showPaletteOnly: true,
  showPalette:true,
  color: '#DC3545',
  palette: [
  ['#1D2939', '#FFF', '#0866C6','#23BF08', '#F49917'],
  ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
  ]
});</code></pre>


      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/spectrum/spectrum.js"></script>

    <script src="../js/starlight.js"></script>
    <script>
      $(function(){

        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        // Select2 by showing the search
        $('.select2-show-search').select2({
          minimumResultsForSearch: ''
        });

        // Select2 with tagging support
        $('.select2-tag').select2({
          tags: true,
          tokenSeparators: [',', ' ']
        });

        // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });
    </script>
  </body>
</html>
