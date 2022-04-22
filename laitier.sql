create database laitier;
grant all privileges on database laitier to admin;
exit;

    create table super_User(
        email_Super_User varchar(50),
        mdp_Super_User varchar(50)
    );

    insert into super_User values('admin@gmail.com','admin');


create table user_Normal(
    id_User_Normal serial not null,
    nom_User_Normal varchar(50) not null,
    email_User_Normal varchar(50) not null,
    mdp_User_Normal varchar(50) not null,
    primary key(id_User_Normal)
);

insert into user_Normal values(default,'Micha','micha@gmail.com','michaMdp');


create table user_Non_Valider(
    id_User_Non_Valider serial not null,
    nom_User_Normal varchar(50) not null,
    email_User_Normal varchar(50) not null,
    mdp_User_Normal varchar(50) not null,
    primary key(id_User_Non_Valider)
);

insert into user_Non_Valider values(default,'Rapa','rapa@gmail.com','rapaMdp');
insert into user_Non_Valider values(default,'Ems','ems@gmail.com','emsMdp');
insert into user_Non_Valider values(default,'Doda','dodaa@gmail.com','dodaMdp');
insert into user_Non_Valider values(default,'Jean','jean@gmail.com','jeanMdp');

create table produit_Fabrique(
    id_Produit_fabrique int not null,
    nom_Produit varchar(50) not null,
    primary key(id_Produit_fabrique)
);

insert into produit_fabrique values(1,'creme fraiche');
insert into produit_fabrique values(2,'yaourt');
insert into produit_fabrique values(3,'beurre');
insert into produit_fabrique values(4,'glace');

-- create table details_Produit(
--     id_detaits_Produit serial not null,
--     id_Produit_fabrique int not null,
--     id_Matiere_1er int not null,
-- );

create table matiere_1er(
    id_Matiere_1er serial not null,
    nom_matiere_1er varchar(50) not null,
    primary key(id_Matiere_1er)
);

insert into matiere_1er values(default,'lait');
insert into matiere_1er values(default,'sucre');
insert into matiere_1er values(default,'parfum');
insert into matiere_1er values(default,'conservateur');
insert into matiere_1er values(default,'colorant');
insert into matiere_1er values(default,'fruit');




-- create table produit_Fini(
--     id_Produit_Fini serial not null,
--     id_Produit_fabrique int not null,
--     id_Matiere_1er int not null,
--     quantite float not null,
--     primary key(id_Produit_Fini),
--     foreign key(id_Produit_fabrique) references produit_Fabrique(id_Produit_fabrique),
--     foreign key(id_Matiere_1er) references matiere_1er(id_Matiere_1er)
-- );

-- insert into produit_Fini values(default,1,2,20);
-- insert into produit_Fini values(default,1,1,10);
-- insert into produit_Fini values(default,1,3,30);
-- insert into produit_Fini values(default,2,4,5);
-- insert into produit_Fini values(default,2,5,15);
-- insert into produit_Fini values(default,3,6,50);



-- create table machine(
--     id_Machine serial not null,
--     nom_Machine varchar(50) not null,
--     id_Produit_fabrique int not null,
--     quantite_Max int not null,
--     Temps_De_Fabrication int not null,
--     primary key(id_Machine),
--     foreign key(id_Produit_fabrique) references produit_Fabrique(id_Produit_fabrique);
-- );

-- insert into machine values(default,'pression',1,100,120);


create table stock_Entrant(
    id_Stock_Entrant serial not null,
    quantite_Entrant float ,
    id_Matiere_1er int not null,
    primary key(id_Stock_Entrant),
    foreign key(id_Matiere_1er) references matiere_1er(id_Matiere_1er)
);


insert into stock_Entrant values(default,25,1);
insert into stock_Entrant values(default,75,2);
insert into stock_Entrant values(default,100,3);
insert into stock_Entrant values(default,80,4);
insert into stock_Entrant values(default,40,5);
insert into stock_Entrant values(default,50,6);
insert into stock_Entrant values(default,55,1);
insert into stock_Entrant values(default,25,3);

create view view_Stock_Entrant as select id_Matiere_1er, sum(quantite_Entrant) as somme_Quantite_Entrant from stock_Entrant  group by id_Matiere_1er;

create table stock_Sortant(
    id_Stock_Sortant serial not null,
    quantite_Sortant float ,
    id_Matiere_1er int not null,
    primary key(id_Stock_Sortant),
    foreign key(id_Matiere_1er) references matiere_1er(id_Matiere_1er)
    );

insert into stock_Sortant values(default,2,10,1);
insert into stock_Sortant values(default,25,2);
insert into stock_Sortant values(default,65,3);
insert into stock_Sortant values(default,40,4);
insert into stock_Sortant values(default,5,5);
insert into stock_Sortant values(default,95,6);

create view view_Stock_Sortant as select id_Matiere_1er, sum(quantite_Sortant) as somme_Quantite_Sortant from stock_Sortant group by id_Matiere_1er;

create view view_Stock as 
select
matiere_1er.id_Matiere_1er,
matiere_1er.nom_Matiere_1er,
sum(view_Stock_Entrant.somme_Quantite_Entrant - view_Stock_Sortant.somme_Quantite_Sortant) as quantite_Restant
from matiere_1er
join view_Stock_Entrant on matiere_1er.id_Matiere_1er = view_Stock_Entrant.id_Matiere_1er
join view_stock_Sortant on view_stock_Entrant.id_Matiere_1er = view_Stock_Sortant.id_Matiere_1er
group by matiere_1er.id_Matiere_1er,matiere_1er.nom_matiere_1er;


create view stock_Restant as select nom_matiere_1er as nom_Stock ,quantite_Entrant ,quantite_Sortant,sum(quantite_Entrant-quantite_Sortant) AS total_Stock from view_Stock group by nom_matiere_1er,quantite_Entrant,quantite_Sortant;


-- create view view_Produit
-- as select
-- produit_fabrique.id_Produit_fabrique,
-- produit_fabrique.nom_Produit,
-- matiere_1er.id_Matiere_1er,
-- matiere_1er.nom_matiere_1er,
-- produit_Fini.quantite
-- from
-- produit_Fabrique
-- join produit_Fini on produit_Fabrique.id_Produit_fabrique = produit_Fini.id_Produit_fabrique
-- join matiere_1er on matiere_1er.id_Matiere_1er = produit_Fini.id_Matiere_1er;


create table formule(
    id_Formule int not null,
    id_Produit_fabrique int not null,
    lait float not null,
    sucre float not null,
    parfum float not null,
    conservateur float not null,
    colorant float not null,
    fruit float not null,
    primary key(id_Formule),
    foreign key(id_Produit_fabrique) references produit_Fabrique(id_Produit_fabrique)
);

insert into formule values(1,1,10,5,10,25,0,0);
insert into formule values(2,2,15,10,10,5,0,0);
insert into formule values(3,3,5,2,1,10,0,0);
insert into formule values(4,4,10,5,0,0,7,0);