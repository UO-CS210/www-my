<!doctype html>
<html xmlns="http://www.w3.org/1999/html" lang="en-us">
<head>
    <?php include("getroots.php"); ?>
    <?php include("lib/headcontent.php"); ?>
    <title>CS 210 Schedule</title>

</head>

<body>
<div class="container">

    <?php include("lib/pagehead.php"); ?>
    <?php include("lib/sidebar.php"); ?>

    <div class="content">

        <div class="item">
            <h1>Schedule overview, Fall 2025</h1>
            <p>The full, updated schedule is in our Canvas site. This
                overview is provided to help prospective students and others
                understand the topics and workload of CS 210 for planning
                purposes.  Changes made during the term may not be reflected
                here.
            </p>

            <table class="schedule">
                <caption>Schedule by week</caption>
                <thead><tr>
                    <th scope="col">Week</th>
                    <th scope="col"></th>
                    <th scope="col">Topic, reading</th>
                    <th scope="col">Project</th>
                </tr></thead>
                <tr><td class="week">1</td>
                    <td class="dates">Sep 30</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/intro.html">
                            Getting started</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/jumbler">
                            Anagram finder
                        </a></td>
                </tr>
                <tr><td class="week">2</td>
                    <td class="dates">Oct 7</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/02-Functions/02-01-Functions.html">
                            Designing and writing functions</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/pi">
                            Estimating Pi
                        </a></td>
                </tr>
                <tr><td class="week">3</td>
                    <td class="dates">Oct 14</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/03-Collections-Loops/03-01-Collections.html">
                            Collections and Loops</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/enrollment">
                            Summarize course enrollment by major
                        </a></td>
                </tr>
                <tr><td class="week">4</td>
                    <td class="dates">Oct 21</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/04-More-Loops/04-01-More-Loops.html">
                            More looping: successive approximation</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/wildfire">
                            Wildfire
                        </a>:K-means clustering of geographic data</td>
                </tr>
                <tr><td class="week">5</td>
                    <td class="dates">Oct 28</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/05-Recursion/05-01-Recursion.html">
                            Writing recursive functions</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/flood-fill">
                            Flooding the cave (flood-fill)
                        </a></td>
                </tr>
                <tr><td class="week">6</td>
                    <td class="dates">Nov 4</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/06-Binding/06-01-Binding.html">
                            Binding and scope</a>,
                        <a href="https://uo-cs-oer.github.io/CS210-text/07-Efficiency/07-01-Efficiency.html">
                            Efficiency, binary search</a>
                    </td>

                    <td class="project">
                        <a href="https://github.com/UO-CS210/06-Boggle">
                            Boggle solver with recursion and binary search
                        </a></td>
                </tr>
                <tr><td class="week">7</td>
                    <td class="dates">Nov 11</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/intro.html">
                            Loops yet again: Forms and idioms</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/08-Path-Simplifier">
                            Path simplifier: Douglas-Peucker cartographic
                            generalization for a GPS trace
                        </a></td>
                </tr>
                <tr><td class="week">8</td>
                    <td class="dates">Nov 18</td>
                    <td class="topic">
                        <a href="https://uo-cs-oer.github.io/CS210-text/09-Recursive-Data/09-01-Recursive-Data-Structures.html">
                            Recursively structured data</a></td>
                    <td class="project">
                        <a href="https://github.com/UO-CS210/Treemap">
                            Treemap visualization
                        </a></td>
                </tr>
                <tr><td class="week">9</td>
                    <td class="dates">Nov 25</td>
                    <td class="topic">
                        No reading.  Holiday Thursday. Tuesday lecture on a
                        topic of interest.
                            </td>
                    <td class="project">
                        Continue work on treemaps project
                        </a></td>
                </tr>
                <tr><td class="week">10</td>
                    <td class="dates">Dec 2</td>
                    <td class="topic">
                        Review.
                        </td>
                    <td class="project">
                        No project.
                        </a></td>
                </tr>
                <tr><td class="week">11</td>
                    <td class="dates">Dec 9</td>
                    <td class="topic">
                            Final exam 8-10am Tuesday</td>
                    <td class="project">
                        </td>
                </tr>
            </table>
            <p>In most weeks, the project is introduced on Tuesday's lecture.
                Most Thursday lecture periods (except exams and Thanksgiving
                holiday) are devoted mainly to "live coding" and other
                in-class exercises.
            </p>
            <p>
            Mini-exams are given Thursday of weeks 4, 6, 8. (Check Canvas for
                for changes.)  Each mini-exam is on paper in class, without
                electronics.  You will have the whole lecture period to
                finish a mini-exam, but you can leave early when you finish.
            </p>
        </div>
    </div> <!-- class content -->

    <?php include("lib/pagefoot.php"); ?>
</div>

</body>

</html>
