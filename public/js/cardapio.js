	 function previewImagem()
	{	


		var imagem = document.querySelector('input[name=arquivos]').files[0];
		var preview = document.querySelector('.image');

		var reader = new FileReader();
		reader.onloadend = function()
		{
			preview.src = reader.result;
		}
		if (imagem)
		{	 
			reader.readAsDataURL(imagem);
		}else
		{
			preview.src = "";
		}
	}
		 function previewImagem2()
	{	


		var imagem = document.querySelector('input[name=arquivos2]').files[0];
		var preview = document.querySelector('.image2');

		var reader = new FileReader();
		reader.onloadend = function()
		{
			preview.src = reader.result;
		}
		if (imagem)
		{	 
			reader.readAsDataURL(imagem);
		}else
		{
			preview.src = "";
		}
	}