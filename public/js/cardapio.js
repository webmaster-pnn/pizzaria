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