<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #333, #555);
            color: white;
            margin: 0;
            padding: 0;
        }

        p {
            text-align: center;
            font-size: 1.5em;
            margin-top: 20px;
        }

        form {
            margin: 20px auto;
            width: 80%;
        }

        fieldset {
            border: 2px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        legend {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <p>Cadastro de Clientes</p>
    <form>
        <fieldset>
            <legend>Dados Pessoais</legend>
            <table>
                <tr>
                    <td rowspan="6">FOTO</td>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" id="nome" name="nome"></td>
                </tr>
                <tr>
                    <td><label for="nasc">Nascimento</label></td>
                    <td><input type="date" id="nasc" name="nasc"></td>
                </tr>
                <tr>
                    <td>Gênero</td>
                    <td><select name="genero" id="genero">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Formação</td>
                    <td><select>
                            <option>Ensino Fundamental Completo</option>
                            <option>Ensino fundamental Incompleto</option>
                            <option>Ensino Médio completo</option>
                            <option>Ensino Médio Incompleto</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>Profissão</td>
                    <td>
                        <select>
                            <option value="advogado">Advogado</option>
                            <option value="arquiteto">Arquiteto</option>
                            <option value="astronauta">Astronauta</option>
                            <option value="babá">Babá</option>
                            <option value="bombeiro">Bombeiro</option>
                            <option value="cabeleireiro">Cabeleireiro</option>
                            <option value="cientista">Cientista</option>
                            <option value="cirurgião">Cirurgião</option>
                            <option value="contador">Contador</option>
                            <option value="cozinheiro">Cozinheiro</option>
                            <option value="dançarino">Dançarino</option>
                            <option value="dentista">Dentista</option>
                            <option value="designer">Designer</option>
                            <option value="desenvolvedor">Desenvolvedor</option>
                            <option value="diplomata">Diplomata</option>
                            <option value="educador">Educador</option>
                            <option value="eletricista">Eletricista</option>
                            <option value="enfermeiro">Enfermeiro</option>
                            <option value="engenheiro">Engenheiro</option>
                            <option value="escritor">Escritor</option>
                            <option value="esteticista">Esteticista</option>
                            <option value="farmacêutico">Farmacêutico</option>
                            <option value="fazendeiro">Fazendeiro</option>
                            <option value="fisioterapeuta">Fisioterapeuta</option>
                            <option value="fotógrafo">Fotógrafo</option>
                            <option value="garçom">Garçom</option>
                            <option value="geólogo">Geólogo</option>
                            <option value="jardineiro">Jardineiro</option>
                            <option value="jornalista">Jornalista</option>
                            <option value="juiz">Juiz</option>
                            <option value="marceneiro">Marceneiro</option>
                            <option value="mecânico">Mecânico</option>
                            <option value="médico">Médico</option>
                            <option value="meteorologista">Meteorologista</option>
                            <option value="militar">Militar</option>
                            <option value="modelo">Modelo</option>
                            <option value="motorista">Motorista</option>
                            <option value="nutricionista">Nutricionista</option>
                            <option value="padeiro">Padeiro</option>
                            <option value="pintor">Pintor</option>
                            <option value="policial">Policial</option>
                            <option value="professor">Professor</option>
                            <option value="psicólogo">Psicólogo</option>
                            <option value="químico">Químico</option>
                            <option value="recepcionista">Recepcionista</option>
                            <option value="repórter">Repórter</option>
                            <option value="serralheiro">Serralheiro</option>
                            <option value="soldador">Soldador</option>
                            <option value="taxista">Taxista</option>
                            <option value="técnico">Técnico</option>
                            <option value="terapeuta">Terapeuta</option>
                            <option value="tradutor">Tradutor</option>
                            <option value="veterinário">Veterinário</option>
                            <option value="vigilante">Vigilante</option>
                            <option value="webdesigner">Webdesigner</option>
                            <option value="xerife">Xerife</option>
                            <option value="youtuber">Youtuber</option>
                            <option value="zelador">Zelador</option>
                            <option value="zoólogo">Zoólogo</option>
                            <option value="advogadoambiental">Advogado Ambiental</option>
                            <option value="bioquímico">Bioquímico</option>
                            <option value="cineasta">Cineasta</option>
                            <option value="dermatologista">Dermatologista</option>
                            <option value="escultor">Escultor</option>
                            <option value="filósofo">Filósofo</option>
                            <option value="garçom">Garçom</option>
                            <option value="higienista">Higienista</option>
                            <option value="ilustrador">Ilustrador</option>
                            <option value="jogador">Jogador</option>
                            <option value="key account manager">Key Account Manager</option>
                            <option value="linguista">Linguista</option>
                            <option value="marinheiro">Marinheiro</option>
                            <option value="neurocientista">Neurocientista</option>
                            <option value="odontologista">Odontologista</option>
                            <option value="ornitólogo">Ornitólogo</option>
                            <option value="pedreiro">Pedreiro</option>
                            <option value="quiroprático">Quiroprático</option>
                            <option value="radiologista">Radiologista</option>
                            <option value="sapateiro">Sapateiro</option>
                            <option value="tatuador">Tatuador</option>
                            <option value="urologista">Urologista</option>
                            <option value="vendedor">Vendedor</option>
                            <option value="xilógrafo">Xilógrafo</option>
                            <option value="yoga instructor">Yoga Instructor</option>
                            <option value="zootecnista">Zootecnista</option>
                    </td>
                    </select>
                </tr>
                <tr>
                    <td>CPF</td>
                    <td><input type="text" id="cpf" name="cpf"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <form>
        <fieldset>
            <legend>Contato</legend>
            <table>
                <tr>
                    <td rowspan="6"><img src="cel.png" alt="" width="200px"></td>
                    <td><label for="nome">Email</label></td>
                    <td><input type="text" id="nome" name="nome"></td>
                </tr>
                <tr>
                    <td><label for="nasc">Telefone</label></td>
                    <td><input type="text" id="nasc" name="nasc"></td>
                </tr>
                <tr>
                    <td>Celular</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text">
                    </td>
                </tr>
                <td>Linkedin</td>
                <td><input type="text" id="cpf" name="cpf"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <form>
        <fieldset>
            <legend>Endereço</legend>
            <table>
                <tr>
                    <td rowspan="6"></td>
                    <td><label for="nome">Logradouro</label></td>
                    <td><input type="text" id="nome" name="nome"></td>
                </tr>
                <tr>
                    <td><label for="nasc">Número</label></td>
                    <td><input type="text" id="nasc" name="nasc"></td>
                </tr>
                <tr>
                    <td>Bairro</td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Estado</td>
                    <td>
                        <select name="estado">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AP">AP</option>
                            <option value="AM">AM</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </td>
                </tr>
                <td>complemento</td>
                <td><input type="text" id="cpf" name="cpf"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>