const imgDiv = document.querySelector('.user-img');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadbtn = document.querySelector('#uploadbtn');

file.addEventListener('change', function(){
    const chosefile = this.files[0];
    if(chosefile){
        const reader = new FileReader();

        reader.addEventListener( 'load' , function(){
            img.setAttribute('src' , reader.result);
        });
        reader.readAsDataURL (chosefile);
    }
});