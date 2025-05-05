@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('My Profile') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-circle"
                       src="http://127.0.0.1:8080/images/wendell.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Wendell Santos</h3>

                <p class="text-muted text-center">Web Developer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Age</b> <a class="float-right">21</a>
                  </li>
                  <li class="list-group-item">
                    <b>Birthday</b> <a class="float-right">February 25, 2004</a>
                  </li>
                  <li class="list-group-item">
                    <b>Civil Status</b> <a class="float-right">Single</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">santoswendell158@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone</b> <a class="float-right">+639159378814</a>
                  </li>

                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Education</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fas fa-book mr-1"></i> College</strong>
            
                <p class="text-muted">
                  B.S. in Information Technology from the DHVSU Apalit
                </p>

                <hr>
                
                <strong><i class="fas fa-book mr-1"></i> High School</strong>
               

                <p class="text-muted">Pampanga Central High School</p>

                <hr>

                <strong><i class="fas fa-book mr-1"></i> Elementary</strong>

                <p class="text-muted">San Jose Elementary School</p>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- /.card -->

            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Skills</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            
              <p class="text-muted">
                  <span class="tag tag-danger">UI Design,</span>
                  <span class="tag tag-success">Programming,</span>
                  <span class="tag tag-info">JAVA,</span>
                  <span class="tag tag-warning">PHP,</span>
                  <span class="tag tag-primary">Javascript,</span>
                  <span class="tag tag-primary">MySql,</span>
                  <span class="tag tag-primary">Adobe Flash,</span>
                  <span class="tag tag-primary">Unity </span>
                </p>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Achievements</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

            
              <ul>
                <li class="text-muted"><p>Former President of Junior High School Student Council</p></li>
                <li class="text-muted"><p>Overall Top 9 in BSIT DHVSU Apalit </p></li>
              </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
                </div>

                <div class="col-md-9">
            <div class="card">
              
              <div class="card-body">
                <div class="tab-content">
                  
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          BSIT 2nd Semester 2022-2023
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      
                      <div>
                      <i class="far fa-clock bg-gray"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header border-0">Built a Console Game Project in C++ </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                         BSIT 1st Semester 2023-2024
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                      <i class="far fa-clock bg-gray"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header border-0">Built a 2D game with Graphics in JAVA </h3>
                          <h3 class="timeline-header border-0">Animated a Short Story using Adobe Flash</h3>
                        </div>
                      </div>
                      <div class="time-label">
                        <span class="bg-warning">
                         BSIT 2nd Semester 2023-2024
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                      <i class="far fa-clock bg-gray"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header border-0">Built a Ecommerce Mobile App using B4A by Anywhere Software </h3>
                          <h3 class="timeline-header border-0">Built a POS System for a Mango Shake Shop using VB.net </h3>
                          <h3 class="timeline-header border-0">Built a Static Website using HTML and CSS </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->

                      <div class="time-label">
                        <span class="bg-primary">
                         BSIT 1nd Semester 2024-2025
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                      <i class="far fa-clock bg-gray"></i>

                        <div class="timeline-item">
                         

                          <h3 class="timeline-header border-0">Built a CPU Scheduling Project System using VB.net </h3>
                          <h3 class="timeline-header border-0">Built a Ecommerce Website using PHP, Javascript, HTML and MySql </h3>
                          <h3 class="timeline-header border-0">Built a 3D Game using Unity </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                 
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        
            </div>
        </div>
            
    </section>
    <!-- /.content -->
@endsection