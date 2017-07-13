
var bannerView = new BannersItem();


function BannersItem() {
    var self = this;
    var removeImage;
    var imgChange;

    // self.showImage = function (element) {
    //     var parent = element.parentNode;
    //     var inputFile = parent.getElementsByTagName('input')[0];
    //     inputFile.click();
    // }
    //
    self.showImageSrc = function (input) {
        if (input.files && input.files[0]) {
            var parent = input.parentNode.parentNode;
            var img = parent.getElementsByTagName('img')[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                img.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    self.toRemove = function (element) {
        var parent = element.parentNode;
        var img = parent.getElementsByTagName('img')[0];
        img.src = "../../src/images/products/img.png";
        var parent = parent.parentNode;
        var input = parent.getElementsByTagName('input')[1];
        input.value = "img.png";

        // var parent = element.parentNode;
        // var inputName = parent.getElementsByTagName('input')[0].getAttribute('name');
        // var arr = inputName.split('_');
        // var position = arr[arr.length - 1];
        //
        // var form = parent.parentNode.parentNode;
        // var catId = (form.parentNode.parentNode).getAttribute('aria-labelledby');
        // if (catId != 'all') {
        //     var arr = catId.split('_');
        //     catId = arr[arr.length - 1];
        // }
        // console.log('catId = ' + catId);
        // console.log('position = ' + position);
        // removeImage = new FormData();
        // removeImage.append('form', 'remove_banner');
        // removeImage.append('cat_id', catId);
        // removeImage.append('pos', position);
        // imgChange = parent.getElementsByTagName('img')[0];
    }

    self.sendBanners = function (element) {
        console.log(element);
        // var form = element.parentNode;
        // var catId = (form.parentNode.parentNode).getAttribute('aria-labelledby');
        // if (catId != 'all') {
        //     var arr = catId.split('_');
        //     catId = arr[arr.length - 1];
        // }
        // var formData = new FormData(form);
        // formData.append('form', 'save_banners');
        // formData.append('id', catId);
        // ajaxObject.postData(
        //     'api/adminApi.php',
        //     formData,
        //     'json',
        //     function (data) {
        //         console.log(data);
        //         if (data["status"]) {
        //             alertObject.showAlert("success", 'Данные успешно сохранены');
        //
        //         } else {
        //             alertObject.showAlert("danger", 'Ошибка сервера');
        //         }
        //     },
        //     function (x, y, z) {
        //         alertObject.showAlert("danger", 'Ошибка сервера');
        //     }
        // );
    }
}