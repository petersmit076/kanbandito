<?php include("header.php"); ?>

    <div id="main-content">
        <div id="main-row">
            <ul class="board-selection">
                <li><div class="main-active">Suntip Board</div><span class="toggle-menu"></span>
                    <ul class="dropdown-menu-default">
                        <li>
                            <a href="#">Overhead Board</a>
                        </li>
                        <li>
                            <a href="#">Pelikaanreizen Board</a>
                        </li>
                        <li>
                            <a href="#">Marketing Board</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="team-selection no-mobile">
                <li><img src="assets/images/profile-4.jpg"></li>
                <li><img src="assets/images/profile-3.jpg"></li>
                <li><img src="assets/images/profile-2.jpg"></li>
                <li><img src="assets/images/profile.png"></li>
                <li class="selection"></li>
            </ul>
            <div class="mobile-team-menu hidden-sm hidden-md hidden-lg">
                <button id="team-toggle" class="btn btn-default" type="button">Team members <i class="fa fa-angle-down"></i></button>
                <ul class="team-menu">
                    <li>
                        <div class="profile-pic">
                            <img src="assets/images/profile-4.jpg">
                        </div>
                        <span>Michelle</span>
                    </li>
                    <li>
                        <a href="#" class="add-team">Add team member <i class="fa fa-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="sprint-row">
            <div class="close-menu hidden-xs"><i class="fa fa-arrow-left"></i></div>
            <div class="mobile-menu hidden-lg hidden-sm hidden-md"><i class="fa fa-bars"></i></div>
            <div class="dropdown sprint">
                <button class="btn btn-default dropdown-toggle" type="button" id="sprint-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Sprint - 3 <span class="fa fa-angle-down"></span></button>
                <ul class="dropdown-menu" aria-labelledby="sprint-menu">
                    <li><a class="done" href="#">Sprint 0</a></li>
                    <li><a class="done" href="#">Sprint 1</a></li>
                    <li><a class="done" href="#">Sprint 2</a></li>
                    <li><a href="#">Sprint 4</a></li>
                    <li><a href="#">Sprint 5</a></li>
                </ul>
            </div>
            <button class="btn btn-default" type="button" id="roadmap-toggle">Roadmap</button>
        </div>

        <div id="board">
            <div class="row">
                <div id="board-1" class="col-md-3 droptrue">
                    <div class="board-column purple">
                        <div class="header">
                            Backlog
                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <ul id="cards-1" class="cards droptrue">
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            <li><img src="assets/images/profile-4.jpg"></li>
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="#task-modal-1" role="button" data-toggle="modal" class="add-task">Add task <i class="fa fa-plus-circle"></i></a>
                    </div>
                </div>
                <div id="board-2" class="col-md-3 droptrue">
                    <div class="board-column orange">
                        <div class="header">
                            In Progress
                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <ul id="cards-2" class="cards droptrue">
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                                <!-- Card modal -->
                                <div id="card-modal-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <div class="breadcrumb-modal"><a href="#">SUN</a> / <div class="card-issue-id">SUN-116</div></div>
                                        <h3 id="myModalLabel">Research project</h3>
                                    </div>
                                    <div class="modal-body">
                                        <div class="edit-row">
                                            <button class="edit btn btn-default"><i class="fa fa-pencil"></i> <span class="hidden-xs">Edit</span></button>
                                            <button class="edit btn btn-default"><i class="fa fa-comment"></i> <span class="hidden-xs">Comment</span></button>
                                            <div class="dropdown flow">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Status <span class="fa fa-angle-down"></span></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Backlog</a></li>
                                                    <li><a href="#">In progess</a></li>
                                                    <li><a href="#">Review</a></li>
                                                    <li><a href="#">Done</a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown assign">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Assign <span class="fa fa-angle-down"></span></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <li><a href="#">Marc <i class="fa fa-plus"></i></a></li>
                                                    <li><a href="#">Susan <i class="fa fa-plus"></i></a></li>
                                                    <li><a href="#">Patrick<i class="fa fa-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="status-row">
                                            <span class="timer-estimate"><i class="fa fa-clock-o"></i>8</span>
                                            <span class="time-remaining"><i class="fa fa-hourglass-end"></i>3</span>
                                            <span class="status in-progress">In Progress</span>
                                        </div>
                                        <p>Dit is een fake tekst. Een faketekst geeft een grafische impressie van hoe dit deel van het ontwerp er uit zou zien als er tekst in zou staan.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label med">Medium Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-99</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label low">Low Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-18</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label low">Low Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-96</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="#task-modal-1" role="button" data-toggle="modal" class="add-task">Add task <i class="fa fa-plus-circle"></i></a>
                    </div>
                </div>
                <div id="board-3" class="col-md-3 droptrue">
                    <div class="board-column blue">
                        <div class="header">
                            Review
                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>

                        <ul id="cards-3" class="cards droptrue">
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="#task-modal-1" role="button" data-toggle="modal" class="add-task">Add task <i class="fa fa-plus-circle"></i></a>
                    </div>
                </div>
                <div id="board-4" class="col-md-3 droptrue">
                    <div class="board-column green">
                        <div class="header">
                            Complete
                            <div class="menu-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <ul id="cards-4" class="cards droptrue">
                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <!-- Card -->
                            <li class="card">
                                <div class="card-header">
                                    <a href="#card-modal-1" role="button" data-toggle="modal" class="card-edit"><i class="fa fa-pencil"></i></a>
                                    <div class="card-label high">High Priority</div>
                                    <div class="card-title">Research project</div>
                                </div>
                                <div class="card-description">Research and strategy for upcoming projects</div>
                                <div class="card-row">
                                    <div class="card-comments"><i class="fa fa-comment"></i>4</div>
                                    <div class="card-hours"><i class="fa fa-clock-o"></i>16</div>
                                    <div class="card-issue-id">SUN-116</div>
                                    <div class="card-team">
                                        <ul>
                                            
                                            <li><img src="assets/images/profile.png"></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="#task-modal-1" role="button" data-toggle="modal" class="add-task">Add task <i class="fa fa-plus-circle"></i></a>

                        <!-- Task modal -->
                        <div id="task-modal-1" class="modal task-modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <div class="card-issue-id">SUN-116</div>
                                <h3 id="myModalLabel">Research project</h3>
                            </div>
                            <div class="modal-body">
                                <div class="status-row">
                                    <span class="timer-estimate"><i class="fa fa-clock-o"></i>8</span>
                                    <span class="time-remaining"><i class="fa fa-hourglass-end"></i>3</span>
                                    <span class="status in-progress">In Progress</span>
                                </div>
                                <p>Dit is een fake tekst. Een faketekst geeft een grafische impressie van hoe dit deel van het ontwerp er uit zou zien als er tekst in zou staan.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                                <button class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>