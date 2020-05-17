create table fs_cat(
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    name varchar(100)
)

create table fs_sous_cat(
    id int NOT null PRIMARY KEY AUTO_INCREMENT,
    name varchar(100),
    id_cat int not null,

    FOREIGN KEY (id_cat) references fs_cat(id),
)

create table fait_saillant(
    id                  int NOT null PRIMARY KEY AUTO_INCREMENT,
    synthese            text,
    mesure_prise        text,
    source              varchar(250),
    lieu                varchar(250),
    piece_joint         varchar(200),
    id_cat              int not null,
    id_sous_cat         int not null,
    id_user             int not null,
    date_trait          datetime,
    date_evenement      datetime,

    vu_chef             boolean  DEFAULT '0',
    instruction_chef    TEXT,

    valider             boolean  DEFAULT '0',
    is_public           boolean  DEFAULT '0',
    is_for_gen          boolean  DEFAULT '0',

    cocher_ig           boolean  DEFAULT '0',
    instruction_ig      TEXT,
    lu_ig               boolean  DEFAULT '0',

    -- FOREIGN KEY (id_user) references utilisateur(id_user),
    FOREIGN KEY (id_cat) references fs_cat(id),
    FOREIGN KEY (id_sous_cat) references fs_sous_cat(id)
)