function lettersOnly(input){
	var regex = /[^a-zA-Z À-ú]/g;
	input.value = input.value.replace(regex, "");
}

function mask(o, f){
	obj = o;
	fun = f;
	setTimeout("execMask()", 1);
}

function execMask(){
	obj.value = fun(obj.value);
}

function maskCPF(input){
	input = input.replace(/\D/g, "");
	input = input.replace(/(\d{3})(\d)/, "$1.$2");
	input = input.replace(/(\d{3})(\d)/, "$1.$2");
	input = input.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
    
	return input;
}

function maskDate(input){
	input = input.replace(/\D/g, "");
	input = input.replace(/(\d{2})(\d)/, "$1/$2");       
	input = input.replace(/(\d{2})(\d)/, "$1/$2");                                          
	input = input.replace(/(\d{2})(\d{2})$/, "$1$2");

	return input;
}

function maskPhone(input){
	input = input.replace(/\D/g, "");
	input = input.replace(/^(\d{2})(\d)/g, "($1) $2");
	input = input.replace(/(\d)(\d{4})$/, "$1-$2");
	
	return input;
}