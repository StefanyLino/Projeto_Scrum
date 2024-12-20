# Projeto Scrum ⋆｡°✩

## Projeto Didático: Banco do Brasil - GRUPO 6 <img src="https://github.com/user-attachments/assets/e86dfe96-55c3-43d8-b614-5bcda8b36e62" alt="Favicon" width="20px" height="20px">
*⚠️ Esse projeto foi feito com base em fins educacionais, qualquer ligação com a marca "Banco do Brasil" é feita para fins didáticos.*

![image](https://github.com/user-attachments/assets/1a0dc068-47d7-4abd-ad9f-80ee88beccfe)
> O Banco do Brasil, fundado em 1808, é uma das principais instituições financeiras do Brasil, oferecendo uma ampla gama de serviços, incluindo contas correntes, crédito, investimentos e seguros. Reconhecido por sua forte presença no setor público e privado, o banco se destaca por suas iniciativas em sustentabilidade e inclusão financeira. Com uma rede extensa de agências e canais digitais, o Banco do Brasil busca constantemente inovar e modernizar seus serviços, mantendo-se competitivo e alinhado às necessidades dos clientes em um mercado em constante evolução.
#
### Nossa atuação:
O projeto didático proposto para o Banco do Brasil foca na criação de uma aplicação web que moderniza a gestão de fornecedores e produtos. Com o objetivo de enfrentar desafios operacionais relacionados a sistemas legados, a aplicação permitirá que os funcionários cadastrem, atualizem, visualizem e excluam informações de forma rápida e eficaz, utilizando conceitos de codificação e prototipagem. Essa solução não só aprimora a eficiência operacional, mas também alinha-se ao compromisso do banco com a sustentabilidade e a digitalização, garantindo uma gestão mais responsável e competitiva no mercado financeiro.

<img width="1040" alt="image" src="https://github.com/user-attachments/assets/aa4532bd-4a14-4610-9051-eacf9758024d">

### Nossa equipe:
**Danielli de Freitas (DEV)** - Responsável pela prototipagem<br>
**Lucas Morete Pereira (DEV)** - Responsável pelo cronograma e realização do Kanban<br>
**Stefany Lino Silva (Scrum Master)** - Responsável pela programação/código, documentação e realização do fluxograma<br>
**Isabelle Pacheco Silva (DEV)** - Responsável pela documentação e pesquisas<br>
**Julia de Carvalho da Silva (DEV)** - Responsável pela documentação e slides de apresentação<br>

### Prototipagem

A prototipagem foi realizada utilizando a plataforma [Figma](https://www.figma.com/design/47tsbp1FsvVNjdpXneZd8K/Banco-do-Brasil?node-id=0-1&node-type=canvas&t=t2RrVy7kgUxW12gf-0), onde foi planejado o front-end da página web. Foram desenvolvidas versões para desktop e mobile, respeitando a paleta de cores da marca e garantindo uma experiência visual consistente e atraente em diferentes dispositivos. Essa abordagem permite um design mais adaptado às necessidades dos usuários, promovendo uma navegação fluida e intuitiva.

<img width="550" alt="image" src="https://github.com/user-attachments/assets/22ce17ea-07c8-4b1f-b70a-61ada492f1aa"><br>
Versão Desktop


<img width="550" alt="image" src="https://github.com/user-attachments/assets/2ce1f8cd-5cc7-450a-a45e-53b24e2cd4f6"><br>
Versão Mobile

<hr>

### Cronograma

O cronograma foi realizado utilizando a plataforma [Trello](https://trello.com/pt-BR?campaign=19269516466&adgroup=148159506607&targetid=kwd-3609071522&matchtype=e&network=g&device=c&device_model=&creative=641463051732&keyword=trello&placement=&target=&ds_eid=700000001557344&ds_e1=GOOGLE&gad_source=1&gclid=Cj0KCQjwmOm3BhC8ARIsAOSbapWUUXH9gNSHReSfJl39ra0vfcci0OxNkfwm0nYx0ZxEAGASJQKWHA8aAtnPEALw_wcB) e pelo Excel, onde foi planejado o andamento e desenvolvimento do projeto. Foram desenvolvidas versões diferentes que acompanham os passos do projeto.

<img width="550" alt="image" src="https://github.com/user-attachments/assets/ac3571c4-0681-4641-8898-9ba16602bf3d"><br>
Versão Kanban


<img width="550" alt="image" src="https://github.com/user-attachments/assets/848af105-11ca-49a6-9293-96a450b9a92c"><br>
Versão Scrum


### Programação/Código

A codificação deste projeto foi feita utilizando HTML e CSS para construir uma interface responsiva e acessível. A estruturação dos elementos HTML e a estilização com CSS foram essenciais para criar uma plataforma funcional e amigável.<br>
•	HTML: As principais estruturas HTML incluem o uso de tags nav, section, button, e div, para organizar os campos de cadastro e os botões de ação.<br>
•	CSS: Foram implementadas classes para estilizar os elementos de forma responsiva, como .btn, .card, e .campo. O CSS também ajusta a interface para diferentes dispositivos com Media Queries que garantem uma experiência consistente em dispositivos móveis e desktop.<br>

<img width="550" alt="image" src="https://github.com/user-attachments/assets/5362a1cc-f917-481a-b617-1eeba18783aa"><br>
Declaração de estilos CSS (exemplo).

Após esses passos, juntamos todo o conteúdo produzido em um arquivo de texto, criando uma documentação seguindo as normas ABNT. 

### Modelagem
Para a elaboração do Banco de Dados, fizemos a modelagem e o SQL 

##### Dicionário de Dados
> Lista de instruções para o meu banco de dados, que descreve informações, o que elas representam e como será usada.<br>
> SERVE PARA: Saber como os dados devem ser usados e organizados. Previne erros.<br>
![image](https://github.com/user-attachments/assets/ecf9595b-ecff-44c0-b267-325aa2cfb429)


##### Modelo Conceitual
> Forma de representar as entidades (coisas sobre as quais queremos armazenar informações) e os relacionamentos entre as mesmas.<br>
> EXEMPLO: Em um médico, as entidades seriam médicos, consultas, paciente, funcionários…<br>
> SERVE PARA: Ajuda a visualizar como os dados estão organizados e como se relacionam.<br>

![image](https://github.com/user-attachments/assets/38b5a532-5dd0-453e-ae6c-6fe83d24fed3)
![image](https://github.com/user-attachments/assets/d30f99e6-7854-43e5-8ee5-6ba21f4fcce2)

##### Modelo Lógico
> No MER se usa figuras geométricas, mas no DER a construção é mais detalhada em tabelas… Aproximação de um Banco de Dados real.<br>
> - Entidades - Tabela no Banco de Dados<br>
> - Atributos - As colunas<br>
> - Relacionamentos - Ligação entre tabelas<br>
> Define tipos de dados, chaves primárias (identificador único de cada tabela), chaves estrangeiras (ligações entre uma tabela e outra) e cardinalidades (quantidade de elementos que se relacionam entre si).
![image](https://github.com/user-attachments/assets/b316742a-587c-4f45-96a0-4b36fced4f0d)

##### Modelo Físico
> Foi feito através do MySQL WorkBench, para guardar as informações em tabelas.
> ![image](https://github.com/user-attachments/assets/71a7777d-7869-4586-9aea-392ab5071d1f)

