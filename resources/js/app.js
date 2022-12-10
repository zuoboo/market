require("./bootstrap");


// font-awesomeを読み込む処理
import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { faAddressCard, faClock } from '@fortawesome/free-regular-svg-icons'
import { faSearch, faStoreAlt, faShoppingBag, faSignOutAlt, faYenSign, faCamera } from '@fortawesome/free-solid-svg-icons'

library.add(faSearch, faAddressCard, faStoreAlt, faShoppingBag, faSignOutAlt, faYenSign, faClock, faCamera);

dom.watch();



// 画像プレビュー表示処理
document
    .querySelector(".image-picker input")
    .addEventListener("change", (e) => {
        //画像が選択されたときの処理
        const input = e.target;
        const reader = new FileReader();
        // 画像を読み込んだ後の処理
        reader.onload = (e) => {
            input.closest(".image-picker").querySelector("img").src =
                e.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    });
