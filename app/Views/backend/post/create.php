<?= $this->extend('backend/layout/layout') ?>
<?= $this->section('content') ?>
    <div class="pd-20 card-box mb-30">
        <div class="" id="alert"></div>
        <form action="<?= route_to('author.post.store') ?>" method="post" class="" id="post-create"
              enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" class="csrf-name" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" value="" name="title" type="text" placeholder="">
                <span class="text-danger fs-6 form-text title_error" style=""></span>
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea id="content" name="content" class="form-control"></textarea>
                <span class="text-danger fs-6 form-text content_error"></span>
            </div>
            <div class="form-group">
                <label>Poster</label>
                <div class="d-flex mx-auto mb-1">
                    <img src="/backend/src/images/banner-img.png" class="img-thumbnail w-50 mx-auto" id="img-preview">
                </div>
                <input type="file" name="poster" id="poster" class="form-control-file form-control height-auto"
                       onchange="onChangePreview()">
                <span class="text-danger fs-6 form-text poster_error"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script>
        function onChangePreview(e) {
            const imgPreview = document.getElementById('img-preview')
            const poster = document.getElementById('poster')

            const fileReader = new FileReader()
            fileReader.readAsDataURL(poster.files[0])
            fileReader.onload = (e) => {
                imgPreview.src = e.target.result
            }
        }

        $(function () {

            $('#post-create').on('submit', function (e) {
                e.preventDefault();
                const form = e.target;
                const csrfName = $('.csrf-name').attr('name');
                const csrfHash = $('.csrf-name').val();
                const data = {
                    [csrfName]: csrfHash,
                    title: $('input[name=title]').val(),
                    content: $('textarea[name=content]').val(),
                    poster: $('input[name=poster]').val(),
                };
                $.ajax({
                    url: form['action'],
                    method: form['method'],
                    processData: false,
                    dataType: false,
                    contentType: 'application/json',
                    type: 'post',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    data,
                    beforeSend: (res) => {
                        $(form).find('span.text-danger').text('')
                    },
                    success(response) {
                        // const res = JSON.parse(response)
                        console.log(response)
                        $('.csrf-name').val(response.token) // update
                        if (!response.code) {
                            $.each(response.errors, function (prefix, val) {
                                $(form).find('span.' + prefix + '_error').text(val)
                            })
                        } else {
                            $('div#alert').text(res.message).addClass('alert alert-success')
                        }

                    },
                    error(res) {
                        $('div#alert').text(res.message).addClass('alert alert-success')
                        console.log(res)
                    },
                })
            })
        })

    </script>
<?= $this->endSection() ?>