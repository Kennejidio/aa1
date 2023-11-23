<!-- ! Contents -->
<section class="container mt-4">
    <div class="row">
        <div class="col-md-7 text-center-alt">
            <h3><b>FACULTY</b></h3>
            <h4 class="text-gray-500"><b>LIST</b></h4>
        </div>
        <div class="col-md-5">
            <div class="card-design bg-blue text-light text-center
                        shadow">
                <font class="h3">200</font>
                <h4>Total Faculty</h4>
            </div>
        </div>
    </div>

    <!-- * BACK BUTTON -->
    <div class="container position-relative">
        <div class="position-absolute ms-2 top-0 start-0">
            <a class="btn bg-blue text-white p-1" href="#"><b>BACK</b></a>
        </div>
    </div>
    <!-- * Search Content -->
    <form>
        <div class="row bg-gray-200 shadow my-5">
            <div class="col-lg-6">
                <a href="#" class="btn mt-2">
                    <div>
                        <img class="mb-3" src="../images/add-user.png" alt="add user" width="40" height="40">
                        <font class="h4">ADD NEW</font>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <div class="input-group input-group-md p-3">
                    <span class="input-group-text">
                        <input class="btn" type="submit" value="Search">
                    </span>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </form>

    <!-- * Result Table -->
    <div class="p-4 mb-5 shadow overflow-scroll">
        <table class="table table-bordered table-responsive-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Fullname</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>student@test.com</td>
                    <td>John Kenneth Carampatana</td>
                    <td class="text-center">
                        <a class="btn btn-blue m-1" href="#">Show</a>
                        <a class="btn btn-green m-1" href="#">Edit</a>
                        <a class="btn btn-red m-1" href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
