<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>MANAGE Vote</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Vote List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Vote Title</th>
                                <th class="text-left ">Vote Subject</th>
                                <th class="text-left ">Description</th>
                                <th class="text-left ">Time limit</th>  
                                <th class="text-left ">Display limit</th>  
                                <th class="text-center" width="20%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selVote = $conn->query("SELECT * FROM Vote_tbl ORDER BY ex_id DESC ");
                                if($selVote->rowCount() > 0)
                                {
                                    while ($selVoteRow = $selVote->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selVoteRow['ex_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selVoteRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td><?php echo $selVoteRow['ex_description']; ?></td>
                                            <td><?php echo $selVoteRow['ex_time_limit']; ?></td>
                                            <td><?php echo $selVoteRow['ex_questlimit_display']; ?></td>
                                            <td class="text-center">
                                             <a href="manage-Vote.php?id=<?php echo $selVoteRow['ex_id']; ?>" type="button" class="btn btn-primary btn-sm">Manage</a>
                                             <button type="button" id="deleteVote" data-id='<?php echo $selVoteRow['ex_id']; ?>'  class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Vote Found</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        
</div>
         