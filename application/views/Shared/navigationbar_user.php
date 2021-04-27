
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url(); ?>assets/img/advisor.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Welcome</p>
<!--                <p>--><?php //echo '' .$this->session->userdata('email').''; ?><!--</p>-->
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li><a href="<?php echo base_url(); ?>index.php/photoController/index"><i class="fa fa-book"></i> <span>Home</span></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/photoController/userAllImages"><i class="fa fa-book"></i> <span>Images</span></a></li>
            <li><a href="<?php echo base_url(); ?>index.php/"><i class="fa fa-book"></i> <span> Logout</span></a></li>
<!--            <li><a href="--><?php //echo base_url(); ?><!--index.php/photoController/advisorStudentAnnouncements"><i class="fa fa-book"></i> <span> Student Announcemnet</span></a></li>-->
<!--            <li><a href="--><?php //echo base_url(); ?><!--asset/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Specific Course</span></a></li>-->
<!--            <li><a href="--><?php //echo base_url(); ?><!--asset/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Guidance</span></a></li>-->

<!--            <li class="treeview">-->
<!--                <a href="--><?php //echo base_url(); ?><!--asset/#">-->
<!--                    <i class="fa fa-edit"></i> <span>Meeting</span>-->
<!--                    <span class="pull-right-container">-->
<!--              <i class="fa fa-angle-left pull-right"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/photoController/advisorMeetingComment"><i class="fa fa-circle-o"></i> Comment</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--index.php/photoController/advisorMeetingHistory"><i class="fa fa-circle-o"></i> History</a></li>-->
<!--                    <li><a href="--><?php //echo base_url(); ?><!--asset/pages/forms/editors.html"><i class="fa fa-circle-o"></i> Appointment</a></li>-->
<!--                </ul>-->
<!--            </li>-->

<!--            <li><a href="--><?php //echo base_url(); ?><!--asset/https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Internship</span></a></li>-->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>