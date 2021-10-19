@extends('backend.layouts.master')
@section('title')
    Dashboard
@endsection
@section('scrollbar')
    <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-light-1 mCSB_scrollTools_vertical"
        style="display: block;">
        <div class="mCSB_draggerContainer">
            <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                style="position: absolute; min-height: 30px; display: block; height: 332px; max-height: 570px; top: 0px;">
                <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
            </div>
            <div class="mCSB_draggerRail"></div>
        </div>
    </div>
@endsection
@section('main')
    <div class="analytics-sparkle-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Computer Technologies</h5>
                            <h2>$<span class="counter">5000</span> <span class="tuition-fees">Tuition
                                    Fees</span></h2>
                            <span class="text-success">20%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:20%;">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30">
                        <div class="analytics-content">
                            <h5>Accounting Technologies</h5>
                            <h2>$<span class="counter">3000</span> <span class="tuition-fees">Tuition
                                    Fees</span></h2>
                            <span class="text-danger">30%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:30%;"> <span
                                        class="sr-only">230% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Electrical Engineering</h5>
                            <h2>$<span class="counter">2000</span> <span class="tuition-fees">Tuition
                                    Fees</span></h2>
                            <span class="text-info">60%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:60%;"> <span
                                        class="sr-only">20% Complete</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                        <div class="analytics-content">
                            <h5>Chemical Engineering</h5>
                            <h2>$<span class="counter">3500</span> <span class="tuition-fees">Tuition
                                    Fees</span></h2>
                            <span class="text-inverse">80%</span>
                            <div class="progress m-b-0">
                                <div class="progress-bar progress-bar-inverse" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width:80%;">
                                    <span class="sr-only">230% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-sales-area mg-tb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-sales-chart">
                        <div class="portlet-title">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="caption pro-sl-hd">
                                        <span class="caption-subject"><b>University Earnings</b></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="actions graph-rp graph-rp-dl">
                                        <p>All Earnings are in million $</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline cus-product-sl-rp">
                            <li>
                                <h5><i class="fa fa-circle" style="color: #006DF0;"></i>CSE</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #933EC5;"></i>Accounting</h5>
                            </li>
                            <li>
                                <h5><i class="fa fa-circle" style="color: #65b12d;"></i>Electrical</h5>
                            </li>
                        </ul>
                        <div id="extra-area-chart" style="height: 356px;">
                            <svg height="356" version="1.1" width="1081" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;">
                                <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with RaphaÃ«l 2.1.2
                                </desc>
                                <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.53125"
                                    y="317.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                                    fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.03125,317.5H1056" stroke-width="0.5"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125"
                                    y="244.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                                    fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.03125,244.375H1056" stroke-width="0.5"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125"
                                    y="171.25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                                    fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.03125,171.25H1056" stroke-width="0.5"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125"
                                    y="98.125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none"
                                    fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.03125,98.125H1056" stroke-width="0.5"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.53125" y="25"
                                    text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan>
                                </text>
                                <path fill="none" stroke="#e0e0e0" d="M45.03125,25H1056" stroke-width="0.5"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="1056" y="330"
                                    text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none"
                                    fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan>
                                </text><text x="887.5821114787768" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                                </text><text x="719.1642229575536" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan>
                                </text><text x="550.7463344363305" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                                </text><text x="381.86702704244635" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                </text><text x="213.44913852122318" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                </text><text x="45.03125" y="330" text-anchor="middle" font-family="sans-serif"
                                    font-size="12px" stroke="none" fill="#888888"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;"
                                    font-weight="normal" transform="matrix(1,0,0,1,0,6.75)">
                                    <tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                </text>
                                <path fill="#2c86f3" stroke="none"
                                    d="M45.03125,268.75C87.1357221303058,249.25,171.34466639091738,194.40625,213.44913852122318,190.75C255.55361065152897,187.09375,339.76255491214056,232.19750341997263,381.86702704244635,239.5C424.0868538909174,246.82250341997263,508.52650758785944,261.4541723666211,550.7463344363305,249.25C592.8508065666363,237.07917236662107,677.0597508272479,146.265625,719.1642229575536,142C761.2686950878594,137.734375,845.477639348471,223.65625,887.5821114787768,215.125C929.6865836090826,206.59375,1013.8955278696942,109.09375,1056,73.75L1056,317.5L45.03125,317.5Z"
                                    fill-opacity="0"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path>
                                <path fill="none" stroke="#006df0"
                                    d="M45.03125,268.75C87.1357221303058,249.25,171.34466639091738,194.40625,213.44913852122318,190.75C255.55361065152897,187.09375,339.76255491214056,232.19750341997263,381.86702704244635,239.5C424.0868538909174,246.82250341997263,508.52650758785944,261.4541723666211,550.7463344363305,249.25C592.8508065666363,237.07917236662107,677.0597508272479,146.265625,719.1642229575536,142C761.2686950878594,137.734375,845.477639348471,223.65625,887.5821114787768,215.125C929.6865836090826,206.59375,1013.8955278696942,109.09375,1056,73.75"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="45.03125" cy="268.75" r="3" fill="#006df0" stroke="#006df0" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="213.44913852122318" cy="190.75" r="3" fill="#006df0" stroke="#006df0"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="381.86702704244635" cy="239.5" r="3" fill="#006df0" stroke="#006df0"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="550.7463344363305" cy="249.25" r="3" fill="#006df0" stroke="#006df0"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="719.1642229575536" cy="142" r="3" fill="#006df0" stroke="#006df0"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="887.5821114787768" cy="215.125" r="3" fill="#006df0" stroke="#006df0"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="1056" cy="73.75" r="3" fill="#006df0" stroke="#006df0" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <path fill="#a76bcb" stroke="none"
                                    d="M45.03125,239.5C87.1357221303058,234.625,171.34466639091738,217.5625,213.44913852122318,220C255.55361065152897,222.4375,339.76255491214056,271.1708276333789,381.86702704244635,259C424.0868538909174,246.79582763337893,508.52650758785944,133.48375512995895,550.7463344363305,122.5C592.8508065666363,111.54625512995896,677.0597508272479,159.0625,719.1642229575536,171.25C761.2686950878594,183.4375,845.477639348471,220,887.5821114787768,220C929.6865836090826,220,1013.8955278696942,183.4375,1056,171.25L1056,317.5L45.03125,317.5Z"
                                    fill-opacity="0"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path>
                                <path fill="none" stroke="#933ec5"
                                    d="M45.03125,239.5C87.1357221303058,234.625,171.34466639091738,217.5625,213.44913852122318,220C255.55361065152897,222.4375,339.76255491214056,271.1708276333789,381.86702704244635,259C424.0868538909174,246.79582763337893,508.52650758785944,133.48375512995895,550.7463344363305,122.5C592.8508065666363,111.54625512995896,677.0597508272479,159.0625,719.1642229575536,171.25C761.2686950878594,183.4375,845.477639348471,220,887.5821114787768,220C929.6865836090826,220,1013.8955278696942,183.4375,1056,171.25"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="45.03125" cy="239.5" r="3" fill="#933ec5" stroke="#933ec5" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="213.44913852122318" cy="220" r="3" fill="#933ec5" stroke="#933ec5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="381.86702704244635" cy="259" r="3" fill="#933ec5" stroke="#933ec5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="550.7463344363305" cy="122.5" r="3" fill="#933ec5" stroke="#933ec5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="719.1642229575536" cy="171.25" r="3" fill="#933ec5" stroke="#933ec5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="887.5821114787768" cy="220" r="3" fill="#933ec5" stroke="#933ec5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="1056" cy="171.25" r="3" fill="#933ec5" stroke="#933ec5" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <path fill="#7bc644" stroke="none"
                                    d="M45.03125,298C87.1357221303058,283.375,171.34466639091738,245.59375,213.44913852122318,239.5C255.55361065152897,233.40625,339.76255491214056,256.55249658002737,381.86702704244635,249.25C424.0868538909174,241.92749658002737,508.52650758785944,189.54292065663475,550.7463344363305,181C592.8508065666363,172.48042065663475,677.0597508272479,173.6875,719.1642229575536,181C761.2686950878594,188.3125,845.477639348471,246.8125,887.5821114787768,239.5C929.6865836090826,232.1875,1013.8955278696942,151.75,1056,122.5L1056,317.5L45.03125,317.5Z"
                                    fill-opacity="0"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0;"></path>
                                <path fill="none" stroke="#65b12d"
                                    d="M45.03125,298C87.1357221303058,283.375,171.34466639091738,245.59375,213.44913852122318,239.5C255.55361065152897,233.40625,339.76255491214056,256.55249658002737,381.86702704244635,249.25C424.0868538909174,241.92749658002737,508.52650758785944,189.54292065663475,550.7463344363305,181C592.8508065666363,172.48042065663475,677.0597508272479,173.6875,719.1642229575536,181C761.2686950878594,188.3125,845.477639348471,246.8125,887.5821114787768,239.5C929.6865836090826,232.1875,1013.8955278696942,151.75,1056,122.5"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                <circle cx="45.03125" cy="298" r="3" fill="#65b12d" stroke="#65b12d" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="213.44913852122318" cy="239.5" r="3" fill="#65b12d" stroke="#65b12d"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="381.86702704244635" cy="249.25" r="3" fill="#65b12d" stroke="#65b12d"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="550.7463344363305" cy="181" r="3" fill="#65b12d" stroke="#65b12d"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="719.1642229575536" cy="181" r="3" fill="#65b12d" stroke="#65b12d"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="887.5821114787768" cy="239.5" r="3" fill="#65b12d" stroke="#65b12d"
                                    stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                <circle cx="1056" cy="122.5" r="3" fill="#65b12d" stroke="#65b12d" stroke-width="1"
                                    style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                            </svg>

                            <div class="morris-hover morris-default-style"
                                style="left: 323.367px; top: 138px; display: none;">
                                <div class="morris-hover-row-label">2012</div>
                                <div class="morris-hover-point" style="color: #006DF0">
                                    CSE:
                                    80
                                </div>
                                <div class="morris-hover-point" style="color: #933EC5">
                                    Accounting:
                                    60
                                </div>
                                <div class="morris-hover-point" style="color: #65b12d">
                                    Electrical:
                                    70
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="library-book-area mg-t-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline10-list">
                        <div class="sparkline10-hd">
                            <div class="main-sparkline10-hd">
                                <h1>Gender</h1>
                            </div>
                        </div>
                        <div class="sparkline10-graph">
                            <div id="pie1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline9-list">
                        <div class="sparkline9-hd">
                            <div class="main-sparkline9-hd">
                                <h1>Map</h1>
                            </div>
                        </div>
                        <div class="sparkline9-graph">
                            <div class="data-map-single">
                                <div id="selected_map"></div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="charts-single-pro responsive-mg-b-30">
                        <div class="alert-title">
                            <h2>Pie Chart</h2>
                        </div>
                        <div id="pie-chart">
                            <canvas id="piechart"></canvas>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


@endsection
@push('stack_js')
    <!-- Data Maps JS -->
    <script src="/backend/js/data-map/d3.min.js"></script>
    <script src="/backend/js/data-map/topojson.js"></script>
    <script src="/backend/js/data-map/datamaps.all.min.js"></script>
    <script src="/backend/js/data-map/data-maps-active.js"></script>
    <!-- c3 JS -->
    <script src="/backend/js/c3-charts/d3.min.js"></script>
    <script src="/backend/js/c3-charts/c3.min.js"></script>

    <!-- Charts JS -->
    <script src="/backend/js/charts/Chart.js"></script>


@endpush
@push('stack_css')
    <!-- Chart CSS -->
    <link rel="stylesheet" href="/backend/css/c3/c3.min.css">
@endpush
@section('js')
    <script>
        (function($) {
            "use strict";
            var ctx = document.getElementById("piechart");
            var piechart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Red", "Orange", "Yellow", "Green", "Blue"],
                    datasets: [{
                        label: 'pie Chart',
                        backgroundColor: [
                            '#303030',
                            '#933EC5',
                            '#65b12d',
                            '#D80027',
                            '#006DF0'
                        ],
                        data: [10, 50, 30, 40, 60]
                    }]
                },
                options: {
                    responsive: true
                }
            });

            c3.generate({
                bindto: '#pie1',
                data: {
                    columns: [
                        ['Male', 30],
                        ['Female', 120]
                    ],
                    colors: {
                        Male: '#006DF0',
                        Female: '#933EC5'
                    },
                    type: 'pie',
                    groups: [
                        ['Male', 'Female']
                    ]
                }
            });

        })(jQuery);
    </script>
    <script>
        (function($) {
            "use strict";
            c3.generate({
                bindto: '#pie1',
                data: {
                    columns: [
                        ['Male', 30],
                        ['Female', 120]
                    ],
                    colors: {
                        Male: '#006DF0',
                        Female: '#933EC5'
                    },
                    type: 'pie',
                    groups: [
                        ['Male', 'Female']
                    ]
                }
            });

        })(jQuery);
    </script>

    <script>
        (function($) {
            "use strict";

            var selected_map = new Datamap({
                element: document.getElementById("selected_map"),
                responsive: true,
                fills: {
                    defaultFill: "#DBDAD6",
                    active: "red"
                },
                geographyConfig: {
                    highlightFillColor: '#006DF0',
                    highlightBorderWidth: 0,
                },
                data: {
                    USA: {
                        fillKey: "active"
                    },
                    RUS: {
                        fillKey: "active"
                    },
                    DEU: {
                        fillKey: "active"
                    },
                    BRA: {
                        fillKey: "active"
                    },
                    VN: {
                        fillKey: "active"
                    }
                }
            });
        })(jQuery);
    </script>
@endsection
