function editar(id, nome, imagem, descricao, preco) {
    let form = document.createElement('form')
    form.action = 'editar.php'
    form.method = 'post'

    let imputNome = document.createElement('input')
    imputNome.type = 'text'
    imputNome.name = 'nome'
    imputNome.className = 'form-control mb-3'
    imputNome.value = nome

    let imputImagem = document.createElement('input')
    imputImagem.type = 'text'
    imputImagem.name = 'imagem'
    imputImagem.className = 'form-control mb-3'
    imputImagem.value = imagem

    let imputPreco = document.createElement('input')
    imputPreco.type = 'text'
    imputPreco.name = 'preco'
    imputPreco.className = 'form-control mb-3'
    imputPreco.value = preco

    let textareaDescricao = document.createElement('textarea')
    textareaDescricao.type = 'text'
    textareaDescricao.name = 'descricao'
    textareaDescricao.className = 'form-control mb-3'
    textareaDescricao.value = descricao

    let inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'btn btn-sm'
    button.innerHTML = 'Atualizar'

    form.appendChild(imputNome)

    form.appendChild(imputImagem)

    form.appendChild(imputPreco)

    form.appendChild(textareaDescricao)

    form.appendChild(inputId)

    form.appendChild(button)

    let produto = document.getElementById('produto_'+id )

    produto.innerHTML = ''

    produto.insertBefore(form, produto[0])

}