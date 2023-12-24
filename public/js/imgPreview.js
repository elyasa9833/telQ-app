function previewImage() {
    const image = document.querySelector('#user_avatar');
    const imgPreview = document.querySelector('.img-preview');
    const imgProfile = document.querySelector('.img-profile');
    
    imgPreview.classList.remove('hidden');
    imgProfile.classList.add('hidden');
    
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFEvent) {
        imgPreview.src = oFEvent.target.result;
    }
}