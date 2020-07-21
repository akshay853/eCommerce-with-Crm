<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row clearfix">
                <div class="col-md-9">

                    <div class="heading-block noborder">
                        <h3><?php echo $user_profile_data['firstname'];?>&nbsp;<?php echo $user_profile_data['secondname'];?></h3>
                        <span>Your Profile Bio</span>
                    </div>
                    <div class="clear"></div>
                    <form action="<?php echo base_url();?>user/edit_profile_action" method="POST">
                    <table class="table table-bordered table-striped">

                        <tbody>
                        <tr>
                            <td>
                                <code>GENDER</code>
                            </td>
                            <td><select required class="form-control" name="gender" id="gender">
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <code>ADDRESS</code>
                            </td>
                            <td><input required class="form-control" type="text" name="address" id="address"value="<?php echo $user_profile_data["address"];?>"></td>
                        </tr>

                        <tr>
                            <td>
                                <code>STATE</code>
                            </td>
                            <td><input required class="form-control" type="text" name="state"id="state" value="<?php echo $user_profile_data["state"];?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <code>DISTRICT</code>
                            </td>
                            <td><input required class="form-control" type="text" name="district"id="district" value="<?php echo $user_profile_data["district"];?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <code>EMAIL</code>
                            </td>
                            <td><input required class="form-control" type="email" name="email"id="email" value="<?php echo $user_profile_data["email"];?>"></td>
                        </tr>
                        <tr>
                            <td>
                                <code>PHONENUMBER</code>
                            </td>
                            <td><input required class="form-control" maxlength="10" minlength="12"type="number" name="phonenumber"id="phonenumber" value="<?php echo $user_profile_data["phonenumber"];?>"></td>
                        </tr>

                        <tr>
                            <td>
                                <code>Password</code>
                            </td>
                            <td><input required class="form-control" maxlength="10" minlength="8" type="password"name="password" id="password" value="<?php echo $user_profile_data["password"];?>"></td>
                        </tr>
                        <tr>

                            <td>   <input type="submit" class="btn btn-default" value="Update"></td>
                        </tr>

                        </tbody>
                    </table>
                    </form>
                </div>
                <div class="w-100 line d-block d-md-none"></div>
                <div class="col-md-3 clearfix">



                </div>
            </div>
        </div>
    </div>
</section>