<div class="app-main__outer">
        <div class="app-main__inner">
                <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>RANKING BY Vote</b></div>
                    </div>
                </div>
                </div> 

                 <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Feedback's List
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4" width="20%">Voteinee</th>
                                <th class="text-left ">Feedbacks</th>
                                <th class="text-center" width="15%">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selVote = $conn->query("SELECT * FROM feedbacks_tbl ORDER BY fb_id DESC ");
                                if($selVote->rowCount() > 0)
                                {
                                    while ($selVoteRow = $selVote->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selVoteRow['fb_exmne_as']; ?></td>
                                            <td><?php echo $selVoteRow['fb_feedbacks']; ?></td>
                                            <td><?php echo $selVoteRow['fb_date']; ?></td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">No Feedback found</h3>
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
         


















