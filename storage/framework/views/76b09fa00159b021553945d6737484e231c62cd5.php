<script>
    var uploadedDocumentMap = {}
    Dropzone.options.documentDropzone = {
        url: '<?php echo e(route('projects.storeMedia')); ?>',
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        headers: {
            'X-CSRF-TOKEN': "<?php echo e(csrf_token()); ?>"
        },
        success: function (file, response) {
            $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
        },
        removedfile: function (file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
                name = file.file_name
            } else {
                name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="document[]"][value="' + name + '"]').remove()
        },

        init: function () {
            <?php if(isset($model) && $model->getMedia(CAMPAIGN_COLLECTION)): ?>
            var files =
                <?php echo json_encode($model->getMedia(CAMPAIGN_COLLECTION)); ?>

                for (var i in files) {
                var file = files[i]
                this.options.addedfile.call(this, file)
                file.previewElement.classList.add('dz-complete')
                $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
            }
            <?php endif; ?>
        }
    }
</script>
<?php /**PATH /media/kero/CS/Projects/Interviews Project/laravel-task/resources/views/partials/dropzone.blade.php ENDPATH**/ ?>