<!-- LOGIN -->
<br><br><br>
    <div class="container">
        <h1 class="text-center">Login</h1>
            <div class="panel panel-default">
                <div class="panel-body">
                <form method="POST" >
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" id="login" class="btn btn-info" value="Login" />
                    </div>
                </form>
                <?php if(count($_POST)>0) {
                    foreach($data['account'] as $account):
                        if ($account['username']==$_POST["username"]){
                            if ($account['password']==$_POST["password"]){
                                header('Location: ' . BASEURL . '/manage');
                                exit();
                            }
                            else{
                                ?>
                                <script>
                                    alert("Password yang anda masukkan salah!");
                                </script>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <script>
                                alert("Username dan password anda salah!");
                            </script>
                            <?php
                        }
                    endforeach;
                    }?>
                </div>
        </div>
    </div> 
    <br><br>  


    <!-- END Login -->