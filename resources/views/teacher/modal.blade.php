                                    @forelse ($modal_data as $data)
                                    <form id="editinformation">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header" >
                                            <h5 class="modal-title" id="exampleModalLabel1">Form Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                        <div class="form-group session_info">
                                                            <label for="text" class="form_data_lable">Experience Type</label>
                                                            <input type="text" name="experience_type" class="form-control form_data_input" id="experience_type" aria-describedby="enterExperience" placeholder="Enter Experience" value="{{$data->experience_type}}">
                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text" class="form_data_lable">Title</label>
                                                        <input type="text" name="experience_title" class="form-control form_data_input" id="enter-title1" aria-describedby="emailHelp" placeholder="Enter Title" value="{{$data->experience_title}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text" class="form_data_lable">Institution/Organisation</label>
                                                        <input type="text" name="experience_org" class="form-control form_data_input" id="organisation-data1" aria-describedby="emailHelp" placeholder="Organisation" value="{{$data->experience_org}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text" class="form_data_lable">Location</label>
                                                        <input type="text" name="experience_location" class="form-control form_data_input" id="location1" aria-describedby="emailHelp" placeholder="Enter Location" value="{{$data->experience_location}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text" class="form_data_lable">Start-End Year</label>
                                                        <input type="text" name="experience_startendyear" class="form-control form_data_input" id="start-year" aria-describedby="emailHelp" placeholder="Enter Year" value="{{$data->experience_startendyear}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group session_info">
                                                        <label for="text" class="form_data_lable">Certification</label>
                                                        <input type="text" name="experience_certification" class="form-control form_data_input" id="certification" aria-describedby="emailHelp" placeholder="Enter Certification" value="{{$data->experience_certification}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="text-primary" id="experience-success-edit"></span>
                                            <span class="text-danger" id="experience-error-edit"></span>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="submitExperience">Save changes</button>
                                        </div>
                                        </form>
                                        @empty

                                    @endforelse
                                    <script>

                                         $('#editinformation').submit(function(e){
                                            e.preventDefault();
                                                var id="{{$data->id}}";
                                                var experience_type=$("#experience_type").val();
                                                var experience_title=$("#enter-title1").val();
                                                var experience_org=$("#organisation-data1").val();
                                                var experience_location=$("#location1").val();
                                                var experience_startendyear=$("#experience_startendyear").val();
                                                var experience_certification=$("#certification").val();
                                                $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                        }
                                                          });
                                                   $.ajax({
                                                       type:'POST',
                                                       url: "{{route('teacher-experience-edit')}}",
                                                       data:{
                                                          id:id,
                                                          experience_type:experience_type,
                                                          experience_title:experience_title,
                                                          experience_org:experience_org,
                                                          experience_location:experience_location,
                                                          experience_startendyear:experience_startendyear,
                                                          experience_certification:experience_certification
                                                      },

                                                        success: (xhr, response) => {
                                                            if (response) {
                                                               console.log(data);
                                                            // $('#experience-success-edit').text("Data saved Succcessfully");
                                                            }
                                                        },
                                                        error: (xhr, status, error)=>{
                                                            if(error){
                                                            this.reset();
                                                            var err=JSON.parse(xhr.responseText);
                                                                $('#experience-error-edit').text("There is some error");
                                                            }
                                                        }
                                                     });
                                             });
                                    </script>

