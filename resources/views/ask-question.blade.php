<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <embed src="/assets/Sound.mp3" loop="true" autostart="true" width="2" height="0"> -->

<!-- Modal -->
<div class="modal fade" id="ask_question" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  text-right" style="font-size: x-large;">
        <div class="modal-content">
            <div class="modal-header flex-column align-items-center">
                <h3 class="modal-title" id="staticBackdropLabel">أجب عن هذا السؤال أولا</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-2">
                        <p class="mb-2">
                            في اي عام اكتشف النفط في السعودية؟
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="answer" class="form-label">الإجابة</label>
                        <input type="number" id="answer" class="form-control text-right" placeholder="اكتب الإجابة هنا">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_answer" class="btn btn-primary">ارسال الإجابة</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', './assets/Sound.mp3');

        audioElement.addEventListener('ended', function() {
            this.play();
        }, false);

            $("#ask_question").modal('show');

        $('body').mouseover(function() {
                // if (audioElement.paused)
                //     audioElement.play();

        })

        $('#btn_answer').click(function() {
            if ($('#answer').val() == "1937") {
                $("#ask_question").modal('hide');
                $("#success").modal('show');
                audioElement.play();
            } else {
                $("#faild").modal('show');
            }


        });
    });
</script>

@include('modals')