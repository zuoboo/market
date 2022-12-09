require('./bootstrap');

document.querySelector('.image-picker input').addEventListener('change', (e) => {
        //画像が選択されたときの処理
        const input = e.target;
        const reader = new FileReader();
        // 画像を読み込んだ後の処理
        reader.onload = (e) => {
            input.closest('.image-picker').querySelector('img').src = e.target.result
        };
        reader.readAsDataURL(input.files[0]);
    });
