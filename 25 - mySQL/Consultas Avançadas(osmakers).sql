# Pega tudo de funcionarios
select * from funcionarios;

# Pega o ID e DATA do OSs
select id, data from oss;

# Conta quantos tem no OSs
select count(*) as quantidade from oss;

# Quantas OSs tem para hoje
select count(*) as quantidade from oss where data='2019-11-18';

#Quais são as OSs que tem duracao prevista maiso que 120
select * from oss where duracao_prev >120;

#Quais são as OSs que tem duracao prevista maior que 120 e são pra hoje
select * from oss where data='2019-11-18' && duracao_prev >120;

#Quais são as OSs que tem no endereço a sequencia 'an'
select * from oss where endereco like '%an%';

#Quantas OSs possuem 'an' no endereço, são para hoje e tem duracao prev menor que 120
select count(*) from oss where endereco like '%a%' && duracao_prev <120 && data='2019-11-18';

#Qual a soma dos valores de todas as OSs
select sum(valor) as somaValor from oss;

#Qual a soma dos valores das OSs do bairro 1
select sum(valor) as somaValor from oss where id_bairro=1;

# Uma consulta que retorne o total dos valores das OSs POR BAIRRO
select id_bairro, sum(valor) as somaValor from oss group by id_bairro;

# Uma consulta que retorne o nome do funcionario seguido do nome a qual equipe ele pertence
select 
	id_equipe, 
    f.nome, 
    e.nome 
from funcionarios f inner join equipes e on e.id=f.id_equipe;

# Uma consulta que retorne todas as colunas de tipos de servico
select * from tipos_de_os;

# Uma consulta que retorne o ID_OS, ENDERECO, VALOR, NOME DO TIPO DA OS
select 
	o.id,
	o.endereco,
    o.valor,
    t.nome 
from (
	oss o 
    inner join tipos_de_os t on o.id_tipo=t.id
);

# Uma consulta que retorne o TOTAL que cada EQUIPE faturou HOJE
select 
	e.id,
    e.nome,
    sum(o.valor) as somaTotal
    
from (
	equipes e
    inner join oss_equipes oe on e.id=oe.id_equipe
    inner join oss o on o.id=oe.id_os
    )
where o.data='2019-11-17'
group by e.id, e.nome;

# Uma consulta que retorne o TOTAL que cada TIPO faturou HOJE
select
	t.id,
    t.nome,
    sum(o.valor) as somaTotal
from (
	oss o
    inner join tipos_de_os t on o.id_tipo=t.id
	)
where o.data='2019-11-18'
group by t.id, t.nome;