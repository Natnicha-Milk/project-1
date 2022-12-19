@extends('layouts.layouts-user')

@section('title')
    บันทึกเหตุการณ์
@endsection


@section('content')
    <div class="card d-flex justify-content-center mx-auto  ">
        <div class="card-body">
            <h3>ข้อมูลเหตุการณ์</h3>
            <hr>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="row mb-4 needs-validation">
                    <div class="col-sm-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example1">เหตุการณ์</label>
                            <input type="text" id="form6Example1" class="form-control" required="" />
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">วันที่เกิดเหตุการณ์</label>
                            <input type="date" id="form6Example2" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">เวลา(เริ่ม)</label>
                            <input type="time" id="form6Example2" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-6 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">เวลา(สิ้นสุด)</label>
                            <input type="time" id="form6Example2" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">สถานที่</label>
                            <input type="text" id="form6Example2" class="form-control" required="" />
                        </div>
                    </div>

                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">รายละเอียด</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" required=""></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">ผลกระทบ/ความเสียหาย</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">วิธีการแก้ไขปัญหา</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">ผู้ติดตาม</label>
                            <input type="text" id="form6Example2" class="form-control" required="" />
                        </div>
                    </div>
                    <div class="col-sm-12 py-2">
                        <div class="form-outline">
                            <label class="form-label" for="form6Example2">เพิ่มภาพเหตุการณ์</label>
                            <div class="field">
                                <input type="file" id="files" name="files[]" multiple />
                            </div>


                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary btn-block mb-4">บันทึกเหตุการณ์</button>
            </form>


        </div>
    </div>
@endsection


@section('script')
    <script src="https://transloadit.edgly.net/releases/uppy/v1.6.0/uppy.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {
            if (window.File && window.FileList && window.FileReader) {
                $("#files").on("change", function(e) {
                    var files = e.target.files,
                        filesLength = files.length;
                    for (var i = 0; i < filesLength; i++) {
                        var f = files[i]
                        var fileReader = new FileReader();
                        fileReader.onload = (function(e) {
                            var file = e.target;
                            $("<span class=\"pip\">" +
                                "<img class=\"imageThumb\" src=\"" + e.target.result +
                                "\" title=\"" + file.name + "\"/>" +
                                "<br/><span class=\"remove\">Remove image</span>" +
                                "</span>").insertAfter("#files");
                            $(".remove").click(function() {
                                $(this).parent(".pip").remove();
                            });

                            // Old code here
                            /*$("<img></img>", {
                              class: "imageThumb",
                              src: e.target.result,
                              title: file.name + " | Click to remove"
                            }).insertAfter("#files").click(function(){$(this).remove();});*/

                        });
                        fileReader.readAsDataURL(f);
                    }
                    console.log(files);
                });
            } else {
                alert("Your browser doesn't support to File API")
            }
        });
    </script>
@endsection
