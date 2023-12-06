<select id="txtlink" class="form-control" name="txtlink">
                                                    <?php
                                                    if($vlink!="")
                                                    {
                                                    ?>
                                                    <option value="<?php echo $vlink; ?>"><?php echo $vlink; ?></option>
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    $result = mysql_query("SELECT * FROM tbllink where fldcounselorcode='$vcounselorcodex' rder by fldindex");
								                    while($row = mysql_fetch_array($result))
								                    {
								                    ?>
													<option value="<?php echo $row['fldlink']; ?>"><?php echo $row['fldlink']; ?></option>
													<?php
                                                    }
                                                    ?>
												</select>

$vstartingtimeh=$_REQUEST['vuid'];
$vdateselect=$_REQUEST['vuid1'];
