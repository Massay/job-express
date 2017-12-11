

            <div class="card card-mg">
                <h5 class="card-header">Refine Search</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control"  name="group" id="group" placeholder="e.g Software Engineer">
                        </div>
                        <div class="form-group">
                         
                            <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <button class="btn-block btn btn-primary">Search Now</button>
                        </div>
                        <a href="#" class="text-center">Advance Search</a>
                    </form>
                </div>
            </div>
            <div class="card card-mg">
                <h6 class="card-header">Category</h6>
                <div class="card-body" style="padding:0">
                        <ul class="list-group">
                        @foreach ($groups as $group)
                            <li class="list-group-item"> 
                            <a href=" {{ url('groups',$group->id)}} ">
                            {{ $group->name }}
                            </a>
                            <span class="badge badge-info">
                            {{ $group->jobs->count()}}
                            </span>
                            </li>
                        @endforeach
                        </ul>
                </div>
            </div>
            <div class="card card-mg">
                <h5 class="card-header">Search Jobs</h5>
                <div class="card-body">
                            <ul>
                                <li><a href="">By Category</a></li>
                                <li><a href="">By company</a></li>
                                <li><a href="">By Location</a></li>
                                <li><a href="">By Skill</a></li>
                                <li><a href="">By Map</a></li>
                            </ul>
                </div>
            </div>
            <div class="card card-mg">
                <h5 class="card-header">Date Posted</h5>
                <div class="card-body">
                     <ul>
                        <li><a href="">Last 1 Week</a></li>
                        <li><a href="">Last 2 Weeks</a></li>
                        <li><a href="">Last Month</a></li>
                        <li><a href="">Last 2 Months</a></li>
                     </ul>
                </div>
            </div>
   

