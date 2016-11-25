create table utilisateur(
utilisateur_id serial;
utilisateur_pseudo varchar(50),
utilisateur_E_mail varchar(50),
utilisateur_mot_de_passe varchar(50),

constraint pk_utilisateur_id primary key (utilisateur_id));

create table categorie(
categorie_id int,
categorie_titre varchar(50),

constraint pk_categorie_id primary key (categorie_id));

create table sujet(
sujet_id serial,
sujet_titre varchar(50),
sujet_description varchar(100),
sujet_categorie_id int,
sujet_utilisateur_id int,

constraint pk_sujet_id primary key (sujet_id),
constraint fk_sujet_categorie_id foreign key(sujet_categorie_id) references categorie(categorie_id));
constraint fk_sujet_utilisateur_id foreign key(sujet_utilisateur_id) references utilisateur(utilisateur_id));

create table message(
message_id int,
message_titre varchar(50),
message_contenu varchar(1000),
message_date_creation date,
message_date_edite date,
message_sujet_id int,
message_utilisateur_id int,

constraint pk_message_id primary key (message_id),
constraint fk_message_sujet_id foreign key(message_sujet_id) references sujet(sujet_id),
constraint fk_message_utilisateur_id foreign key(message_utilisateur_id) references utilisateur(utilisateur_id));



----------------------------------------------------------------------------------------
create table utilisateur(
utilisateur_id serial,
utilisateur_pseudo varchar(50),
utilisateur_E_mail varchar(50),
utilisateur_mot_de_passe varchar(50),

constraint pk_utilisateur_id primary key (utilisateur_id),
constraint u_utilisateur_id unique (utilisateur_id));

create table sujet(
sujet_id serial,
sujet_titre varchar(50),
sujet_description varchar(100),
sujet_utilisateur_id int,

constraint pk_sujet_id primary key (sujet_id, sujet_utilisateur_id),
constraint fk_sujet_utilisateur_id foreign key(sujet_utilisateur_id) references utilisateur(utilisateur_id),
constraint u_sujet_id unique (sujet_id));

create table message(
message_id serial,
message_titre varchar(50),
message_contenu varchar(1000),
message_date_creation date,
message_date_edite date,
message_sujet_id int,
message_utilisateur_id int,

constraint pk_message_id primary key (message_id, message_sujet_id, message_utilisateur_id),
constraint fk_message_sujet_id foreign key(message_sujet_id) references sujet(sujet_id),
constraint fk_message_utilisateur_id foreign key(message_utilisateur_id) references utilisateur(utilisateur_id),
constraint u_message_id unique (message_id));