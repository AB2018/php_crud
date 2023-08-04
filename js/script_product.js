
jQuery('#form').validate({
	ignore: '',
	rules: {
		ProductName: "required",
		productPrice: "required",
		productCategory: "required",
		image : "required",

	}, messages: {
		ProductName: "Product Name Field is required",
		productPrice: "Price Field is required",
		productCategory: "Please select one option",
		image : "Please upload product image",
		
	},


});

