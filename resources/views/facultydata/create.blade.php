        <!-- ! Contents -->
        <div class="container position-relative">
            <div class="position-absolute ms-3 mt-3 top-0 start-0">
                <a class="btn bg-blue text-white p-1" href="#"><b>BACK</b></a>
            </div>
        </div>
        <section class="d-flex justify-content-center my-5">
            <!-- <div class="position-relative">
                <div class="position-absolute ms-3 mt-3 top-0 start-0">
                    <a class="btn bg-blue text-white p-1" href="#"><b>BACK</b></a>
                </div>
            </div> -->
            <!-- ! FORM -->
            <form action="" method="post" class="bg-white rounded-1 shadow p-3
                mb-5">
                <div class="text-center">
                    <h2 class="text-darkpink">CREATE FACULTY</h2>
                </div>

                <!-- * PERSONAL DETAILS -->
                <div class="text-center bg-green mt-3">
                    <h4 class="text-white">PERSONAL DETAILS</h4>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Firstname</span>
                        <input class="form-control" type="text" name="firstname">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Middlename</span>
                        <input class="form-control" type="text" name="middlename">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Lastname</span>
                        <input class="form-control" type="text" name="lastname">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Extname</span>
                        <input class="form-control" type="text" name="extname">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Gender</span>
                        <select class="form-select" name="gender">
                            <option disabled selected>Choose...</option>
                            <option>male</option>
                            <option>female</option>
                        </select>
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Birthdate</span>
                        <input class="form-control" type="date" name="bday">
                    </div>
                </div>

                <!-- * ADDRESS DETAILS -->
                <div class="text-center bg-green mt-3">
                    <h4 class="text-white">ADDRESS DETAILS</h4>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Barangay</span>
                        <input class="form-control" type="text" name="barangay">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Municipality/City</span>
                        <input class="form-control" type="text" name="municipal">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Province</span>
                        <input class="form-control" type="text" name="province">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Zip</span>
                        <input class="form-control" type="number" name="zip">
                    </div>
                </div>

                <!-- * LOGIN DETAILS -->
                <div class="text-center bg-green mt-3">
                    <h4 class="text-white">LOGIN DETAILS</h4>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Email</span>
                        <input class="form-control" type="email" name="email">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Mobile Number</span>
                        <input class="form-control" type="number" name="mobile_no">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Password</span>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <div class="col-md input-group mt-1">
                        <span class="input-group-text">Re-enter Password</span>
                        <input class="form-control" type="password" name="cpassword">
                    </div>
                </div>

                <!-- ! BUTTON SUBMIT -->
                <div class="row">
                    <div class="col-md mt-5 text-center">
                        <button class="btn btn-darkpink px-5 py-1" type="submit" name="register">SUBMIT</button>
                    </div>
                </div>
            </form>
        </section>
