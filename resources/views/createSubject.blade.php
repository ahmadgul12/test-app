@extends('layouts.app')
@section('main')

<section id="menu">

    <div class="logo">
        <img src="./p css/imgs/l.jpg">
        <h2>KDR University</h2>

    </div>
    <div class="items">
        <hr style="border: 1px solid black;">
        <a href="index.html">
            <li><i class="fa fa-bars"></i>Dashboard</li>
        </a>

        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleSecondLevelList()"> <i class="fa fa-cog"></i>Department <i style="margin-left: 0px;" class="fa fa-chevron-right" aria-hidden="true"></i> </li>
            <ul class="second-level-list">
                <a href="create department.html">
                    <li><i class="fa fa-cogs"></i>Create Department</li>
                </a>
                <a href="managedepartment.html">
                    <li><i class="fa fa-cogs"></i>Manage Department</li>
                </a>
            </ul>
        </ul>

        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleTherdLevelList()"><i class="fa fa-home"></i>Classes<i style="margin-left: 45px;" class="fa fa-chevron-right" aria-hidden="true"></i> <i></i> </li>
            <ul class="therd-level-list">
                <a href="create class.html">
                    <li> <i class="fa fa-university"></i>create class</li>
                </a>
                <a href="manage class.html">
                    <li><i class="fa fa-cogs"></i>Manage class</li>
                </a>
            </ul>
        </ul>

        </ul>
        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleFourthLevelList()"><i class="fa fa-home"></i>Sbjects<i style="margin-left: 50px;" class="fa fa-chevron-right" aria-hidden="true"></i> <i></i> </li>
            <ul class="fourth-level-list">
                <a href="create subject.html">
                    <li> <i class="fa fas fa-book"></i>create Subject</li>
                </a>
                <a href="manage subject.html">
                    <li><i class="fa fa-cogs"></i>Manage Subject</li>
                </a>
            </ul>
        </ul>
        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleFivethLevelList()"><i class="fa fa-home"></i>Student<i style="margin-left: 50px;" class="fa fa-chevron-right" aria-hidden="true"></i> <i></i> </li>
            <ul class="fiveth-level-list">
                <a href="add student.html">
                    <li> <i class="fa far fa-user"></i> Add Student</li>
                </a>
                <a href="manage student.html">
                    <li><i class="fa fa-cogs"></i>Manage Student</li>
                </a>
            </ul>
        </ul>

        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleSixthLevelList()"><i class="fa fa-home"></i>Results<i style="margin-left: 52px;" class="fa fa-chevron-right" aria-hidden="true"></i> <i></i> </li>
            <ul class="sixth-level-list">
                <a href="add result.html">
                    <li> <i class="fa fa-university"></i>Add Result</li>
                </a>
                <a href="manage result.html">
                    <li><i class="fa fa-cogs"></i>Manage Result</li>
                </a>
            </ul>
        </ul>

        <ul class="first-level-list">
            <li class="toggel-li" onclick="toggleSeventhLevelList()"> <i class="fa fa-cog"></i>admin <i style="margin-left: 57px;" class="fa fa-chevron-right" aria-hidden="true"></i> </li>
            <ul class="seventh-level-list">
                <li><i class="fa fa-cogs"></i><a href="admin chaing password.html">Change Password</a></li>
                <a href="">
                    <li><i class="fa fa-cogs"></i>Change Name</li>
                </a>
            </ul>
        </ul>


    </div>
</section>
<div id="navbar">
    <button>Logout</button>
</div>
<!-- sidebar end -->
<script src="./js/main.js"></script>

<div class="mine">
    <h1>Subject Cration
        <hr>
    </h1>

    <div class="from-mine">

        <label for=" Subject Name"> Subject Name</label>
        <input type="text" placeholder>
        <br>
        <label for="Subject Code">Subject Code</label>
        <input type="text" placeholder>
        <br>
        <button type="submit">Submit</button>

    </div>

</div>

@endsection