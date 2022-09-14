@extends('admin.admin_master')
@section('admin')
<!--**********************************
        Nav header start
    ***********************************-->
<div class="nav-header">
    <a href="index.html" class="brand-logo">
        <svg class="logo-abbr" xmlns="http://www.w3.org/2000/svg" width="62.074" height="65.771" viewbox="0 0 62.074 65.771">
            <g id="search_11_" data-name="search (11)" transform="translate(12.731 12.199)">
                <rect class="rect-primary-rect" id="Rectangle_1" data-name="Rectangle 1" width="60" height="60" rx="30" transform="translate(-10.657 -12.199)" fill="#f73a0b"></rect>
                <path id="Path_2001" data-name="Path 2001" d="M32.7,5.18a17.687,17.687,0,0,0-25.8,24.176l-19.8,21.76a1.145,1.145,0,0,0,0,1.62,1.142,1.142,0,0,0,.81.336,1.142,1.142,0,0,0,.81-.336l19.8-21.76a17.687,17.687,0,0,0,29.357-13.29A17.57,17.57,0,0,0,32.7,5.18Zm-1.62,23.392A15.395,15.395,0,0,1,9.312,6.8,15.395,15.395,0,1,1,31.083,28.572Zm0,0" transform="translate(1 0)" fill="#fff" stroke="#fff" stroke-width="1"></path>
                <path id="Path_2002" data-name="Path 2002" d="M192.859,115.547a4.523,4.523,0,0,0,.7-2.415v-2.284a4.55,4.55,0,0,0-9.1,0v2.284a4.523,4.523,0,0,0,.7,2.415,4.954,4.954,0,0,0-3.708,4.788v1.623a2.4,2.4,0,0,0,2.4,2.4h10.323a2.4,2.4,0,0,0,2.4-2.4v-1.623a4.954,4.954,0,0,0-3.708-4.788Zm-6.114-4.7a2.259,2.259,0,0,1,4.518,0v2.284a2.259,2.259,0,1,1-4.518,0Zm7.53,11.111a.11.11,0,0,1-.11.11H183.843a.11.11,0,0,1-.11-.11v-1.623a2.656,2.656,0,0,1,2.653-2.653h5.237a2.656,2.656,0,0,1,2.653,2.653Zm0,0" transform="translate(-168.591 -98.178)" fill="#fff" stroke="#fff" stroke-width="1"></path>
            </g>
        </svg>



        <svg class="brand-title" xmlns="http://www.w3.org/2000/svg" width="134.01" height="48.365" viewbox="0 0 134.01 48.365">
            <g id="Group_38" data-name="Group 38" transform="translate(-133.99 -40.635)">
                <text id="Job_Admin_Dashboard" data-name="Job Admin Dashboard" transform="translate(134 85)" fill="#787878" font-size="12" font-family="Poppins-Light, Poppins" font-weight="300"><tspan x="0" y="0">Job Admin Dashboard</tspan></text>
                <path id="Path_1948" data-name="Path 1948" d="M.36,6.616a1.661,1.661,0,0,0,1.094-.422,1.287,1.287,0,0,0,.5-1.016V-11.738H7.52L7.551,5.271A8.16,8.16,0,0,1,6.91,8.789a4.074,4.074,0,0,1-2.2,1.985,11.542,11.542,0,0,1-4.346.657ZM17.651,9.68A7.316,7.316,0,0,1,13.7,8.617a7.008,7.008,0,0,1-2.626-2.97,9.786,9.786,0,0,1-.922-4.315,9.276,9.276,0,0,1,.907-4.174,6.935,6.935,0,0,1,2.6-2.877,7.438,7.438,0,0,1,4-1.047,7.607,7.607,0,0,1,4.018,1.032,6.8,6.8,0,0,1,2.611,2.861,9.349,9.349,0,0,1,.907,4.205,9.759,9.759,0,0,1-.922,4.33,6.993,6.993,0,0,1-2.642,2.955A7.4,7.4,0,0,1,17.651,9.68Zm0-4.565a1.753,1.753,0,0,0,1.438-.954,5.2,5.2,0,0,0,.625-2.83,4.8,4.8,0,0,0-.594-2.626,1.73,1.73,0,0,0-1.47-.907,1.694,1.694,0,0,0-1.454.907,4.908,4.908,0,0,0-.578,2.626,5.309,5.309,0,0,0,.61,2.83A1.718,1.718,0,0,0,17.651,5.115Zm17.478,4.6q-2.345,0-5.972-.375L27.75,9.18V-12.238h5.44V-6.11q.25-.094.844-.3a6.64,6.64,0,0,1,1.079-.281,6.807,6.807,0,0,1,1.079-.078,5.75,5.75,0,0,1,4.737,1.939q1.579,1.939,1.579,6.285,0,4.377-1.767,6.316T35.129,9.711Zm-.594-4.878a2.3,2.3,0,0,0,1.876-.719A4.131,4.131,0,0,0,37,1.551Q37-1.92,34.754-1.92q-.719,0-1.563.063v6.6A10.43,10.43,0,0,0,34.535,4.834ZM45.134-6.36h5.44V9.274h-5.44Zm.031-6.222h5.44V-7.36h-5.44ZM59.611,9.68a5.9,5.9,0,0,1-4.909-2q-1.595-2-1.595-6.222a12.451,12.451,0,0,1,.844-5.143A4.635,4.635,0,0,1,56.3-6.125a9.87,9.87,0,0,1,3.846-.641,13.2,13.2,0,0,1,2.095.188q1.157.188,3.033.625L65.145-1.7q-2.908-.219-3.627-.219a4.459,4.459,0,0,0-1.845.3,1.565,1.565,0,0,0-.844.985,6.976,6.976,0,0,0-.219,2A7.45,7.45,0,0,0,58.845,3.5a1.625,1.625,0,0,0,.86,1.032,4.362,4.362,0,0,0,1.813.3l3.6-.219L65.27,8.9A27.641,27.641,0,0,1,59.611,9.68Zm8.473-21.918h5.44V-.325l1.032-.406L76.714-6.36H82.78L79.4,1.207,83,9.274H76.9L74.744,3.958l-1.219.406V9.274h-5.44Z" transform="translate(133.63 53.217)" fill="#464646"></path>
            </g>
        </svg>

    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
***********************************-->

<!--**********************************
    Chat box start
***********************************-->
<div class="chatbox">
    <div class="chatbox-close"></div>
    <div class="custom-tab-1">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="chat" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a>
                        <div>
                            <h6 class="mb-1">Chat List</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll  " id="DLAB_W_Contacts_Body">
                        <ul class="contacts">
                            <li class="name-first-letter">A</li>
                            <li class="active dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="{{ asset('/assetsimages/avatar/1.jpg') }}" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Archie Parker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Alfie Mason</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">B</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Bashid Samim</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Breddie Ronan</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Ceorge Carson</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">D</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Darry Parker</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Denry Hunter</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">J</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jack Ronan</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jacob Tucker</span>
                                        <p>Kalid is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>James Logan</span>
                                        <p>Taherah left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Joshua Weston</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">O</li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oliver Acker</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li class="dlab-chat-user">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Oscar Weston</span>
                                        <p>Rashid left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card chat dlab-chat-history-box d-none">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);" class="dlab-chat-history-back">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"></polygon><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"></rect><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "></path></g></svg>
                        </a>
                        <div>
                            <h6 class="mb-1">Chat with Khelesh</h6>
                            <p class="mb-0 text-success">Online</p>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                                <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                                <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Hi, how are you samim?
                                <span class="msg_time">8:40 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Hi Khalid i am good tnx how about you?
                                <span class="msg_time_send">8:55 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am good too, thank you for your chat template
                                <span class="msg_time">9:00 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                You are welcome
                                <span class="msg_time_send">9:05 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                I am looking for your next templates
                                <span class="msg_time">9:07 AM, Today</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mb-4">
                            <div class="msg_cotainer_send">
                                Ok, thank you have a good day
                                <span class="msg_time_send">9:10 AM, Today</span>
                            </div>
                            <div class="img_cont_msg">
                                <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-start mb-4">
                            <div class="img_cont_msg">
                                <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
                            </div>
                            <div class="msg_cotainer">
                                Bye, see you
                                <span class="msg_time">9:12 AM, Today</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer type_msg">
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="alerts" role="tabpanel">
                <div class="card mb-sm-3 mb-md-0 contacts_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                        <div>
                            <h6 class="mb-1">Notications</h6>
                            <p class="mb-0">Show All</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                        <ul class="contacts">
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">KK</div>
                                    <div class="user_info">
                                        <span>David Nester Birthday</span>
                                        <p class="text-primary">Today</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SOCIAL</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont success">RU</div>
                                    <div class="user_info">
                                        <span>Perfection Simplified</span>
                                        <p>Jame Smith commented on your status</p>
                                    </div>
                                </div>
                            </li>
                            <li class="name-first-letter">SEVER STATUS</li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont primary">AU</div>
                                    <div class="user_info">
                                        <span>AharlieKane</span>
                                        <p>Sami is online</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont info">MO</div>
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>Nargis left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="notes">
                <div class="card mb-sm-3 mb-md-0 note_card">
                    <div class="card-header chat-list-header text-center">
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect></g></svg></a>
                        <div>
                            <h6 class="mb-1">Notes</h6>
                            <p class="mb-0">Add New Nots</p>
                        </div>
                        <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g></svg></a>
                    </div>
                    <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                        <ul class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>New order placed..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Youtube, a video-sharing website..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>john just buy your product..</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="user_info">
                                        <span>Athan Jacoby</span>
                                        <p>10 Aug 2020</p>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Chat box End
***********************************-->

<!--**********************************
    Header start
***********************************-->
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                    <div class="nav-item d-flex align-items-center">
                        <div class="input-group search-area">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                        </div>
                        <div class="plus-icon">
                            <a href="javascript:void(0);"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell-link " href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.871" viewbox="0 0 24 22.871">
                                <g data-name="Layer 2" transform="translate(-2 -2)">
                                    <path id="Path_9" data-name="Path 9" d="M23.268,2H4.73A2.733,2.733,0,0,0,2,4.73V17.471A2.733,2.733,0,0,0,4.73,20.2a.911.911,0,0,1,.91.91v1.94a1.82,1.82,0,0,0,2.83,1.514l6.317-4.212a.9.9,0,0,1,.5-.153h4.436a2.742,2.742,0,0,0,2.633-2L25.9,5.462A2.735,2.735,0,0,0,23.268,2Zm.879,2.978-3.539,12.74a.915.915,0,0,1-.88.663H15.292a2.718,2.718,0,0,0-1.514.459L7.46,23.051v-1.94a2.733,2.733,0,0,0-2.73-2.73.911.911,0,0,1-.91-.91V4.73a.911.911,0,0,1,.91-.91H23.268a.914.914,0,0,1,.879,1.158Z" transform="translate(0 0)"></path>
                                    <path id="Path_10" data-name="Path 10" d="M7.91,10.82h4.55a.91.91,0,1,0,0-1.82H7.91a.91.91,0,1,0,0,1.82Z" transform="translate(-0.45 -0.63)"></path>
                                    <path id="Path_11" data-name="Path 11" d="M16.1,13H7.91a.91.91,0,1,0,0,1.82H16.1a.91.91,0,1,0,0-1.82Z" transform="translate(-0.45 -0.99)"></path>
                                </g>
                            </svg>
                            <span class="badge light text-white bg-primary rounded-circle">76</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
                                <g data-name="Layer 2" transform="translate(-2 -2)">
                                    <path id="Path_20" data-name="Path 20" d="M22.571,15.8V13.066a8.5,8.5,0,0,0-7.714-8.455V2.857a.857.857,0,0,0-1.714,0V4.611a8.5,8.5,0,0,0-7.714,8.455V15.8A4.293,4.293,0,0,0,2,20a2.574,2.574,0,0,0,2.571,2.571H9.8a4.286,4.286,0,0,0,8.4,0h5.23A2.574,2.574,0,0,0,26,20,4.293,4.293,0,0,0,22.571,15.8ZM7.143,13.066a6.789,6.789,0,0,1,6.78-6.78h.154a6.789,6.789,0,0,1,6.78,6.78v2.649H7.143ZM14,24.286a2.567,2.567,0,0,1-2.413-1.714h4.827A2.567,2.567,0,0,1,14,24.286Zm9.429-3.429H4.571A.858.858,0,0,1,3.714,20a2.574,2.574,0,0,1,2.571-2.571H21.714A2.574,2.574,0,0,1,24.286,20a.858.858,0,0,1-.857.857Z"></path>
                                </g>
                            </svg>
                            <span class="badge light text-white bg-primary rounded-circle">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-info">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-success">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2">
                                                <img alt="image" width="50" src="images/avatar/1.jpg">
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Dr sultads Send you Photo</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-danger">
                                                KG
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Resport created successfully</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-panel">
                                            <div class="media me-2 media-primary">
                                                <i class="fa fa-home"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mb-1">Reminder : Treatment Time!</h6>
                                                <small class="d-block">29 July 2020 - 02:26 PM</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
                        </div>
                    </li>


                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.262" height="24" viewbox="0 0 23.262 24">
                                <g id="icon" transform="translate(-1565 90)">
                                    <path id="setting_1_" data-name="setting (1)" d="M30.45,13.908l-1-.822a1.406,1.406,0,0,1,0-2.171l1-.822a1.869,1.869,0,0,0,.432-2.385L28.911,4.293a1.869,1.869,0,0,0-2.282-.818l-1.211.454a1.406,1.406,0,0,1-1.88-1.086l-.213-1.276A1.869,1.869,0,0,0,21.475,0H17.533a1.869,1.869,0,0,0-1.849,1.567L15.47,2.842a1.406,1.406,0,0,1-1.88,1.086l-1.211-.454a1.869,1.869,0,0,0-2.282.818L8.126,7.707a1.869,1.869,0,0,0,.432,2.385l1,.822a1.406,1.406,0,0,1,0,2.171l-1,.822a1.869,1.869,0,0,0-.432,2.385L10.1,19.707a1.869,1.869,0,0,0,2.282.818l1.211-.454a1.406,1.406,0,0,1,1.88,1.086l.213,1.276A1.869,1.869,0,0,0,17.533,24h3.943a1.869,1.869,0,0,0,1.849-1.567l.213-1.276a1.406,1.406,0,0,1,1.88-1.086l1.211.454a1.869,1.869,0,0,0,2.282-.818l1.972-3.415a1.869,1.869,0,0,0-.432-2.385ZM27.287,18.77l-1.211-.454a3.281,3.281,0,0,0-4.388,2.533l-.213,1.276H17.533l-.213-1.276a3.281,3.281,0,0,0-4.388-2.533l-1.211.454L9.75,15.355l1-.822a3.281,3.281,0,0,0,0-5.067l-1-.822L11.721,5.23l1.211.454A3.281,3.281,0,0,0,17.32,3.151l.213-1.276h3.943l.213,1.276a3.281,3.281,0,0,0,4.388,2.533l1.211-.454,1.972,3.414h0l-1,.822a3.281,3.281,0,0,0,0,5.067l1,.822ZM19.5,7.375A4.625,4.625,0,1,0,24.129,12,4.63,4.63,0,0,0,19.5,7.375Zm0,7.375A2.75,2.75,0,1,1,22.254,12,2.753,2.753,0,0,1,19.5,14.75Z" transform="translate(1557.127 -90)"></path>
                                </g>
                            </svg>

                            <span class="badge light text-white bg-primary rounded-circle">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div id="DZ_W_TimeLine02" class="widget-timeline dlab-scroll style-1 ps ps--active-y p-3 height370">
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge primary"></div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>10 minutes ago</span>
                                            <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge info">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge danger">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>30 minutes ago</span>
                                            <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge success">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>15 minutes ago</span>
                                            <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge warning">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="timeline-badge dark">
                                        </div>
                                        <a class="timeline-panel text-muted" href="javascript:void(0);">
                                            <span>20 minutes ago</span>
                                            <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="images/profile/pic1.jpg" width="20" alt="">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ms-2">Profile </span>
                            </a>
                            <a href="email-inbox.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox1" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ms-2">Inbox </span>
                            </a>
                            <a href="./login.html" class="dropdown-item ai-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                <span class="ms-2">Logout </span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!--**********************************
    Header end ti-comment-alt
***********************************-->

<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <div class="dropdown header-profile2 ">
            <a class="nav-link " href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                <div class="header-info2 d-flex align-items-center">
                    <img src="{{ asset('/assets/images/profile/pic1.jpg') }}" alt="">
                    <div class="d-flex align-items-center sidebar-info">
                        <div>
                            <span class="font-w400 d-block">{{ Auth::guard('admin')->user()->name }}</span>
                            <small class="text-end font-w400">{{ Auth::guard('admin')->user()->email }}</small>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>

                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="app-profile.html" class="dropdown-item ai-icon ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <span class="ms-2">Profile </span>
                </a>
                <a href="email-inbox.html" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <span class="ms-2">Inbox </span>
                </a>
                <a href="{{ route('admin.logout') }}" class="dropdown-item ai-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span class="ms-2">Logout </span>
                </a>
            </div>
        </div>
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard Light</a></li>
                    <li><a href="index-2.html">Dashboard Dark</a></li>
                    <li><a href="jobs-page.html">Jobs</a></li>
                    <li><a href="application-page.html">Application</a></li>
                    <li><a href="my-profile.html">Profile</a></li>
                    <li><a href="statistics-page.html">Statistics</a></li>
                    <li><a href="compaines.html">Companies</a></li>
                </ul>

            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-093-waving"></i>
                    <span class="nav-text">Jobs</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="job-list.html">Job Lists</a></li>
                    <li><a href="job-view.html">Job View</a></li>
                    <li><a href="job-application.html">Job Application</a></li>
                    <li><a href="apply-job.html">Apply Job</a></li>
                    <li><a href="new-job.html">New Job</a></li>
                    <li><a href="user-profile.html">User Profile</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-050-info"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="chart-flot.html">Flot</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-chartist.html">Chartist</a></li>
                    <li><a href="chart-sparkline.html">Sparkline</a></li>
                    <li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-086-star"></i>
                    <span class="nav-text">Bootstrap</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="ui-accordion.html">Accordion</a></li>
                    <li><a href="ui-alert.html">Alert</a></li>
                    <li><a href="ui-badge.html">Badge</a></li>
                    <li><a href="ui-button.html">Button</a></li>
                    <li><a href="ui-modal.html">Modal</a></li>
                    <li><a href="ui-button-group.html">Button Group</a></li>
                    <li><a href="ui-list-group.html">List Group</a></li>
                    <li><a href="ui-card.html">Cards</a></li>
                    <li><a href="ui-carousel.html">Carousel</a></li>
                    <li><a href="ui-dropdown.html">Dropdown</a></li>
                    <li><a href="ui-popover.html">Popover</a></li>
                    <li><a href="ui-progressbar.html">Progressbar</a></li>
                    <li><a href="ui-tab.html">Tab</a></li>
                    <li><a href="ui-typography.html">Typography</a></li>
                    <li><a href="ui-pagination.html">Pagination</a></li>
                    <li><a href="ui-grid.html">Grid</a></li>

                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-045-heart"></i>
                    <span class="nav-text">Plugins</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="uc-select2.html">Select 2</a></li>
                    <li><a href="uc-nestable.html">Nestedable</a></li>
                    <li><a href="uc-noui-slider.html">Noui Slider</a></li>
                    <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                    <li><a href="uc-toastr.html">Toastr</a></li>
                    <li><a href="map-jqvmap.html">Jqv Map</a></li>
                    <li><a href="uc-lightgallery.html">Light Gallery</a></li>
                </ul>
            </li>
            <li><a href="widget-basic.html" class="" aria-expanded="false">
                    <i class="flaticon-013-checkmark"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Forms</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="form-element.html">Form Elements</a></li>
                    <li><a href="form-wizard.html">Wizard</a></li>
                    <li><a href="form-ckeditor.html">CkEditor</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation.html">Form Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-043-menu"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-login.html">Login</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                    <li><a href="empty-page.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>
        <div class="plus-box">
            <p class="fs-14 font-w600 mb-2">Let Jobick Managed<br>Your Resume Easily<br></p>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="copyright">
            <p><strong>Jobick Job Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row separate-row">
                                    <div class="col-sm-6">
                                        <div class="job-icon pb-4 d-flex justify-content-between">
                                            <div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <h2 class="mb-0">342</h2>
                                                    <span class="text-success ms-3">+0.5 %</span>
                                                </div>
                                                <span class="fs-14 d-block mb-2">Interview Schedules</span>
                                            </div>
                                            <div id="NewCustomers"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="job-icon pb-4 pt-4 pt-sm-0 d-flex justify-content-between">
                                            <div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <h2 class="mb-0">984</h2>
                                                </div>
                                                <span class="fs-14 d-block mb-2">Application Sent</span>
                                            </div>
                                            <div id="NewCustomers1"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="job-icon pt-4 pb-sm-0 pb-4 pe-3 d-flex justify-content-between">
                                            <div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <h2 class="mb-0">1,567k</h2>
                                                    <span class="text-danger ms-3">-2 % </span>
                                                </div>
                                                <span class="fs-14 d-block mb-2">Profile Viewed</span>
                                            </div>
                                            <div id="NewCustomers2"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="job-icon pt-4  d-flex justify-content-between">
                                            <div>
                                                <div class="d-flex align-items-center mb-1">
                                                    <h2 class="mb-0">437</h2>
                                                </div>
                                                <span class="fs-14 d-block mb-2">Unread Messages</span>
                                            </div>
                                            <div id="NewCustomers3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card " id="user-activity">
                            <div class="card-header border-0 pb-0 flex-wrap">
                                <h4 class="fs-20 mb-1">Vacany Stats</h4>
                                <div class="card-action coin-tabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#Daily" role="tab">Daily</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#weekly" role="tab">Weekly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="pb-4 d-flex flex-wrap">
											<span class="d-flex align-items-center">
												<svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="0 0 13 13">
												  <rect width="13" height="13" rx="6.5" fill="#35c556"></rect>
												</svg>
												Application Sent
											</span>
                                    <span class="application d-flex align-items-center">
												<svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="0 0 13 13">
												  <rect width="13" height="13" rx="6.5" fill="#3f4cfe"></rect>
												</svg>

												Interviews
											</span>
                                    <span class="application d-flex align-items-center">
												<svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="0 0 13 13">
												  <rect width="13" height="13" rx="6.5" fill="#f34040"></rect>
												</svg>

												Rejected
											</span>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Daily">
                                        <canvas id="activity" height="115"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card" id="user-activity1">
                            <div class="card-header border-0 pb-0">
                                <h4 class="fs-20 mb-1">Chart</h4>
                                <div class="card-action coin-tabs mt-3 mt-sm-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#Daily1" role="tab">Daily</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-bs-toggle="tab" href="#weekly1" role="tab">Weekly</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#monthly1" role="tab">Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
										<span class="me-sm-5 me-3 font-w500">
											<svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="0 0 13 13">
											  <rect width="13" height="13" fill="#f73a0b"></rect>
											</svg>
											Delivered
										</span>
                                <span class="fs-16 font-w600 me-5">239 <small class="text-success fs-12 font-w400">+0.4%</small></span>
                                <span class="ms-sm-5 ms-3 font-w500">
											<svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewbox="0 0 13 13">
											  <rect width="13" height="13" fill="#6e6e6e"></rect>
											</svg>
											Expense
										</span>
                                <span class="fs-16 font-w600">239</span>
                                <div class="tab-content mt-5" id="myTabContent">
                                    <div class="tab-pane fade show active" id="monthly1">
                                        <canvas id="activity1" class="chartjs"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="fs-20 mb-1">Featured Companies</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-3 loadmore-content">
                                <div class="row" id="FeaturedCompaniesContent">
                                    <div class="col-xl-6 col-sm-6 mt-4 ">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Kleon Team</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 mt-4 col-sm-6">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#7630d2"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Ziro Studios Inc.</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6  col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#b848ef"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Qerza</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#7e1d74"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Kripton Studios</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#0411c2"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Omah Ku Inc.</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#378a82"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Ventic</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#175baa"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Sakola</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6 mt-4">
                                        <div class="d-flex">
													<span>
														<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
														  <g transform="translate(-457 -443)">
															<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
															<g transform="translate(457 443)">
															  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#eeb927"></rect>
															  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
															  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
															</g>
														  </g>
														</svg>
													</span>
                                            <div class="ms-3 featured">
                                                <h4 class="fs-20 mb-1">Uena Foods</h4>
                                                <span>Desgin Team Agency</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 m-auto pt-0">
                                <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded m-auto dlab-load-more" id="FeaturedCompanies" rel="ajax/featuredcompanies.html">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row ">
                                    <div class="col-xl-8 col-xxl-7 col-sm-7">
                                        <div class="update-profile d-flex">
                                            <img src="{{ asset('/assets/images/profile/pic1.jpg') }}" alt="">
                                            <div class="ms-4">
                                                <h3 class="fs-24 font-w600 mb-0">Franklin Jr</h3>
                                                <span class="text-primary d-block mb-4">UI / UX Designer</span>
                                                <span><i class="fas fa-map-marker-alt me-1"></i>Medan, Sumatera Utara - ID</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-xxl-5 col-sm-5 sm-mt-auto mt-3">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-rounded">Update Profile</a>
                                    </div>
                                </div>
                                <div class="row mt-4 align-items-center">
                                    <h4 class="fs-20 mb-3">Skills</h4>
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-green progress-animated" style="width: 90%; height:13px;" role="progressbar">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Figma</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>90%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-info progress-animated" style="width: 68%; height:13px;" role="progressbar">
                                                <span class="sr-only">45% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Adobe XD</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>68%</span>
                                        </div>
                                        <div class="progress default-progress">
                                            <div class="progress-bar bg-blue progress-animated" style="width: 85%; height:13px;" role="progressbar">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-end mt-2 pb-4 justify-content-between">
                                            <span class="fs-14 font-w500">Photoshop</span>
                                            <span class="fs-16"><span class="text-black pe-2"></span>85%</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-6">
                                        <div id="pieChart1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="fs-20 mb-3">Recent Activity</h4>
                                <div>
                                    <select class="default-select dashboard-select">
                                        <option data-display="newest">newest</option>

                                        <option value="2">oldest</option>
                                    </select>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body loadmore-content  recent-activity-wrapper" id="RecentActivityContent">
                                <div class="d-flex recent-activity">
											<span class="me-3 activity">
												<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17">
												  <circle cx="8.5" cy="8.5" r="8.5" fill="#f93a0b"></circle>
												</svg>
											</span>
                                    <span>
												<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
												  <g transform="translate(-457 -443)">
													<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
													<g transform="translate(457 443)">
													  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
													  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
													  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
													</g>
												  </g>
												</svg>
											</span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Bubles Studios have 5 available positions for you</h5>
                                        <span>8min ago</span>
                                    </div>
                                </div>
                                <div class="d-flex recent-activity">
											<span class="me-3 activity">
												<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17">
												  <circle cx="8.5" cy="8.5" r="8.5" fill="#a1a1a1"></circle>
												</svg>
											</span>
                                    <span>
												<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
													  <g transform="translate(-457 -443)">
														<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
														<g transform="translate(457 443)">
														  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#eeac27"></rect>
														  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
														  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
														</g>
													  </g>
												</svg>
											</span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Elextra Studios has invited you to interview meeting tomorrow</h5>
                                        <span>8min ago</span>
                                    </div>
                                </div>
                                <div class="d-flex recent-activity">
											<span class="me-3 activity">
												<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17">
												  <circle cx="8.5" cy="8.5" r="8.5" fill="#a1a1a1"></circle>
												</svg>
											</span>
                                    <span>
												<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
													  <g transform="translate(-457 -443)">
														<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
														<g transform="translate(457 443)">
														  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#22bc32"></rect>
														  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
														  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
														</g>
													  </g>
												</svg>
											</span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Highspeed Design Team have 2 available positions for you</h5>
                                        <span>8min ago</span>
                                    </div>
                                </div>
                                <div class="d-flex recent-activity">
											<span class="me-3">
												<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17">
												  <circle cx="8.5" cy="8.5" r="8.5" fill="#a1a1a1"></circle>
												</svg>
											</span>
                                    <span>
												<svg xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
													  <g transform="translate(-457 -443)">
														<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
														<g transform="translate(457 443)">
														  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#9933cb"></rect>
														  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
														  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
														</g>
													  </g>
												</svg>
											</span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Kleon Studios have 5 available positions for you</h5>
                                        <span>8min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 m-auto pt-0">
                                <a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded m-auto dlab-load-more" id="RecentActivity" rel="ajax/recentactivity.html">View more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0 border-0 flex-wrap">
                                <h4 class="fs-20 mb-3">Available Jobs For You</h4>
                                <div>
                                    <select class="default-select dashboard-select">
                                        <option data-display="newest">newest</option>

                                        <option value="2">oldest</option>
                                    </select>
                                    <div class="dropdown custom-dropdown mb-0">
                                        <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#342E59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-carousel owl-loaded front-view-slider ">
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">UI Designer</h4>
                                                <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#ee27c0"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">Researcher</h4>
                                                <span class="text-primary mb-3 d-block">Kleon Studios</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2db532"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">Frontend</h4>
                                                <span class="text-primary mb-3 d-block">Green Comp.</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2769ee"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">UI Designer</h4>
                                                <span class="text-primary mb-3 d-block">Bubbles Studios</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#ee27c0"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">Researcher</h4>
                                                <span class="text-primary mb-3 d-block">Kleon Studios</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items">
                                        <div class="jobs">
                                            <div class="text-center">
														<span>
															<svg class="mb-2" xmlns="http://www.w3.org/2000/svg" width="71" height="71" viewbox="0 0 71 71">
															  <g transform="translate(-457 -443)">
																<rect width="71" height="71" rx="12" transform="translate(457 443)" fill="#c5c5c5"></rect>
																<g transform="translate(457 443)">
																  <rect data-name="placeholder" width="71" height="71" rx="12" fill="#2db532"></rect>
																  <circle data-name="Ellipse 12" cx="18" cy="18" r="18" transform="translate(15 20)" fill="#fff"></circle>
																  <circle data-name="Ellipse 11" cx="11" cy="11" r="11" transform="translate(36 15)" fill="#ffe70c" style="mix-blend-mode: multiply;isolation: isolate"></circle>
																</g>
															  </g>
															</svg>
														</span>
                                                <h4 class="mb-0">Frontend</h4>
                                                <span class="text-primary mb-3 d-block">Green Comp.</span>
                                            </div>
                                            <div>
                                                <span class="d-block mb-1"><i class="fas fa-map-marker-alt me-2"></i>Manchester, England</span>
                                                <span><i class="fas fa-comments-dollar me-2"></i>$ 2,000 - $ 2,500</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2021</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

@endsection
