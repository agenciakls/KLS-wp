import Header from './parts/header'
import HeaderTitle from './parts/header-title'
import PreFooter from './parts/pre-footer'
import Footer from './parts/footer'

export default function TrabalheConosco() {
    return(
        <div>
            <Header background={true} />
            <HeaderTitle title={"Trabalhe Conosco"} />
                <main className="page page-stores">
                    <div className="container">
                        <div className="row">
                            <div className="col-md-12 form-contact">
                                <form id="form-work" action="" method="post">
                                    <h2 className="pt-2 pb-2">Informações Pessoais</h2>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <input type="text" name="nome" className="input-contato" placeholder="Nome Completo" />
                                        </div>
                                        <div className="col-md-6">
                                            <input type="text" name="email" className="input-contato" placeholder="E-mail" />
                                        </div>
                                        <div className="col-md-6">
                                            <input type="tel" name="telefone" className="input-contato" placeholder="Telefone" id="field-telefone" />
                                        </div>
                                        <div className="col-md-6">
                                            <input type="text" name="celular" className="input-contato" placeholder="Celular" id="field-celular" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="cpf" className="input-contato" placeholder="CPF" id="field-cpf" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="rg" className="input-contato" placeholder="RG" id="field-rg" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="nascimento" className="input-contato" placeholder="Data de Nascimento" id="field-nascimento" />
                                        </div>
                                        <div className="col-md-3">
                                            <label style={{padding: "10px"}}>
                                                <input type="radio" name="sexo" id="masculino" className="input-contato" value="masculino" />
                                                 Masculino
                                            </label>
                                            <label style={{padding: "10px"}}>
                                                <input type="radio" name="sexo" id="feminino" className="input-contato" value="feminino" />
                                                 Feminino
                                            </label>
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="nacionalidade" className="input-contato" placeholder="Nacionalidade" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="naturalidade" className="input-contato" placeholder="Naturalidade" />
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Endereço</h2>
                                    <div className="row">
                                        <div className="col-md-5">
                                            <input type="text" name="endereco" className="input-contato" placeholder="Endereço" />
                                        </div>
                                        <div className="col-md-2">
                                            <input type="text" name="numero" className="input-contato" placeholder="Número" />
                                        </div>
                                        <div className="col-md-5">
                                            <input type="text" name="complemento" className="input-contato" placeholder="Complemento" />
                                        </div>
                                        <div className="col-md-4">
                                            <input type="text" name="bairro" className="input-contato" placeholder="Bairro" />
                                        </div>
                                        <div className="col-md-4">
                                            <input type="text" name="cidade" className="input-contato" placeholder="cidade" />
                                        </div>
                                        <div className="col-md-4">
                                            <input type="text" name="estado" className="input-contato" placeholder="Estado" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="cep" className="input-contato" placeholder="CEP" />
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Escolaridade</h2>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <select name="escolaridade">
                                                <option selected="selected" disabled="">Selecionar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Cursos</h2>
                                    <p><strong>Curso 1</strong></p>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <input type="text" name="curso[]" className="input-contato" placeholder="Nome do Curso" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="instituicao[]" className="input-contato" placeholder="Instituição de Ensino" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="duracao[]" className="input-contato" placeholder="Duração" />
                                        </div>
                                    </div>
                                    <p><strong>Curso 2</strong></p>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <input type="text" name="curso[]" className="input-contato" placeholder="Nome do Curso" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="instituicao[]" className="input-contato" placeholder="Instituição de Ensino" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="duracao[]" className="input-contato" placeholder="Duração" />
                                        </div>
                                    </div>
                                    <p><strong>Curso 3</strong></p>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <input type="text" name="curso[]" className="input-contato" placeholder="Nome do Curso" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="instituicao[]" className="input-contato" placeholder="Instituição de Ensino" />
                                        </div>
                                        <div className="col-md-3">
                                            <input type="text" name="duracao[]" className="input-contato" placeholder="Duração" />
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Experiências</h2>
                                    <div className="row">
                                        <div className="col-md-4">
                                            <p><strong>Empresa 1</strong></p>
                                            <input type="text" name="empresa[]" className="input-contato" placeholder="Nome da Empresa" />
                                            <input type="text" name="cargo[]" className="input-contato" placeholder="Cargo ou Função" />
                                            <input type="text" name="tempo[]" className="input-contato" placeholder="Tempo" />
                                        </div>
                                        <div className="col-md-4">
                                            <p><strong>Empresa 2</strong></p>
                                            <input type="text" name="empresa[]" className="input-contato" placeholder="Nome da Empresa" />
                                            <input type="text" name="cargo[]" className="input-contato" placeholder="Cargo ou Função" />
                                            <input type="text" name="tempo[]" className="input-contato" placeholder="Tempo" />
                                        </div>
                                        <div className="col-md-4">
                                            <p><strong>Empresa 3</strong></p>
                                            <input type="text" name="empresa[]" className="input-contato" placeholder="Nome da Empresa" />
                                            <input type="text" name="cargo[]" className="input-contato" placeholder="Cargo ou Função" />
                                            <input type="text" name="tempo[]" className="input-contato" placeholder="Tempo" />
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Vaga de Interesse</h2>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <select name="vaga" id="subject" className="input-contato">
                                                <option selected="selected" disabled="">Selecione a Vaga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Dados Complementares</h2>
                                    <div className="row">
                                        <div className="col-md-12">
                                            <textarea name="mensagem" className="input-contato" cols="30" rows="5" placeholder="Fale Sobre Você"></textarea>
                                        </div>
                                    </div>
                                    <h2 className="pt-2 pb-2">Anexar Currículo</h2>
                                    <div className="row">
                                        <div className="col-md-6">
                                            <input type="file" name="curriculo" className="input-contato" id="curriculo-contact" />
                                        </div>
                                        <div className="col-md-6">
                                            <button type="button" className="button-contato" id="delete-file-contact">Excluir</button>
                                        </div>
                                    </div>
                                    <p><small>PDF</small></p>
                                    <div className="row">
                                        <div className="col-md-12">
                                            <input type="hidden" name="action" value="work" />
                                            <input type="submit" className="button-contato" />
                                        </div>
                                    </div>
                                    <div className="row pt-3">
                                        <div className="col-md-12">
                                            <div id="response-work"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
            <PreFooter />
            <Footer />
        </div>
    )
}