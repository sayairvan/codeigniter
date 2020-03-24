/*==============================================================*/
/* DBMS name:      SAP SQL Anywhere 17                          */
/* Created on:     18/03/2020 17:20:19                          */
/*==============================================================*/


-- if exists(select 1 from sys.sysforeignkey where role='FK_ACARA_MEMPUNYAI_BILAL') then
--     alter table ACARA
--        delete foreign key FK_ACARA_MEMPUNYAI_BILAL
-- end if;

-- if exists(select 1 from sys.sysforeignkey where role='FK_ACARA_MENGAMBIL_TEMPLATE') then
--     alter table ACARA
--        delete foreign key FK_ACARA_MENGAMBIL_TEMPLATE
-- end if;

-- if exists(select 1 from sys.sysforeignkey where role='FK_ACARA_MENGINGAT_PENCERAM') then
--     alter table ACARA
--        delete foreign key FK_ACARA_MENGINGAT_PENCERAM
-- end if;

-- if exists(select 1 from sys.sysforeignkey where role='FK_ACARA_MENGINPUT_ADMIN') then
--     alter table ACARA
--        delete foreign key FK_ACARA_MENGINPUT_ADMIN
-- end if;

-- if exists(select 1 from sys.sysforeignkey where role='FK_BILAL_MEMPUNYAI_ACARA') then
--     alter table BILAL
--        delete foreign key FK_BILAL_MEMPUNYAI_ACARA
-- end if;

-- if exists(select 1 from sys.sysforeignkey where role='FK_FOTO_MEMILIKI_ACARA') then
--     alter table FOTO
--        delete foreign key FK_FOTO_MEMILIKI_ACARA
-- end if;

-- drop index if exists ACARA.MENGINPUT_FK;

-- drop index if exists ACARA.MEMPUNYAI2_FK;

-- drop index if exists ACARA.MENGINGATKAN_FK;

-- drop index if exists ACARA.MENGAMBIL_FK;

-- drop index if exists ACARA.ACARA_PK;

-- drop table if exists ACARA;

-- drop index if exists ADMIN.ADMIN_PK;

-- drop table if exists ADMIN;

-- drop index if exists BILAL.MEMPUNYAI_FK;

-- drop index if exists BILAL.BILAL_PK;

-- drop table if exists BILAL;

-- drop index if exists FOTO.MEMILIKI_FK;

-- drop index if exists FOTO.FOTO_PK;

-- drop table if exists FOTO;

-- drop index if exists PENCERAMAH.PENCERAMAH_PK;

-- drop table if exists PENCERAMAH;

-- drop index if exists TEMPLATE_PESAN.TEMPLATE_PESAN_PK;

-- drop table if exists TEMPLATE_PESAN;

/*==============================================================*/
/* Table: ACARA                                                 */
/*==============================================================*/
create or replace table ACARA 
(
   ID_ACARA             integer                        not null,
   ID_ADMIN             integer                        null,
   ID_PENCERAMAH        integer                        null,
   ID_BILAL             integer                        null,
   ID_TEMPLATE          integer                        null,
   JENIS_ACARA          varchar(100)                   null,
   NAMA_KAJIAN2         varchar(100)                   null,
   TEMA_ACARA           varchar(255)                   null,
   TGL_ACARA            date                           null,
   PAMFLET_ACARA        varchar(1000)                  null,
   VIDEO_ACARA          varchar(1000)                  null,
   constraint PK_ACARA primary key clustered (ID_ACARA)
);

/*==============================================================*/
/* Index: ACARA_PK                                              */
/*==============================================================*/
-- create unique clustered index ACARA_PK on ACARA (
-- ID_ACARA ASC
-- );

-- /*==============================================================*/
-- /* Index: MENGAMBIL_FK                                          */
-- /*==============================================================*/
-- create index MENGAMBIL_FK on ACARA (
-- ID_TEMPLATE ASC
-- );

-- /*==============================================================*/
-- /* Index: MENGINGATKAN_FK                                       */
-- /*==============================================================*/
-- create index MENGINGATKAN_FK on ACARA (
-- ID_PENCERAMAH ASC
-- );

-- /*==============================================================*/
-- /* Index: MEMPUNYAI2_FK                                         */
-- /*==============================================================*/
-- create index MEMPUNYAI2_FK on ACARA (
-- ID_BILAL ASC
-- );

-- /*==============================================================*/
-- /* Index: MENGINPUT_FK                                          */
-- /*==============================================================*/
-- create index MENGINPUT_FK on ACARA (
-- ID_ADMIN ASC
-- );

/*==============================================================*/
/* Table: ADMIN                                                 */
/*==============================================================*/
create or replace table ADMIN 
(
   ID_ADMIN             integer                        not null,
   USERNAME             varchar(50)                    null,
   PASSWORD             varchar(50)                    null,
   NAMA_ADMIN           varchar(100)                   null,
   NO_TELP_ADMIN        varchar(100)                   null,
   constraint PK_ADMIN primary key clustered (ID_ADMIN)
);

/*==============================================================*/
/* Index: ADMIN_PK                                              */
/*==============================================================*/
-- create unique clustered index ADMIN_PK on ADMIN (
-- ID_ADMIN ASC
-- );

/*==============================================================*/
/* Table: BILAL                                                 */
/*==============================================================*/
create or replace table BILAL 
(
   ID_BILAL             integer                        not null,
   ID_ACARA             integer                        null,
   NAMA_BILAL           varchar(100)                   null,
   NO_TELP_BILAL        varchar(100)                   null,
   ALAMAT_BILAL         varchar(500)                   null,
   constraint PK_BILAL primary key clustered (ID_BILAL)
);

/*==============================================================*/
/* Index: BILAL_PK                                              */
/*==============================================================*/
-- create unique clustered index BILAL_PK on BILAL (
-- ID_BILAL ASC
-- );

/*==============================================================*/
/* Index: MEMPUNYAI_FK                                          */
/*==============================================================*/
-- create index MEMPUNYAI_FK on BILAL (
-- ID_ACARA ASC
-- );

/*==============================================================*/
/* Table: FOTO                                                  */
/*==============================================================*/
create or replace table FOTO 
(
   ID_FOTO              integer                        not null,
   ID_ACARA             integer                        null,
   FOTO                 varchar(1000)                  null,
   constraint PK_FOTO primary key clustered (ID_FOTO)
);

/*==============================================================*/
/* Index: FOTO_PK                                               */
/*==============================================================*/
-- create unique clustered index FOTO_PK on FOTO (
-- ID_FOTO ASC
-- );

-- /*==============================================================*/
-- /* Index: MEMILIKI_FK                                           */
-- /*==============================================================*/
-- create index MEMILIKI_FK on FOTO (
-- ID_ACARA ASC
-- );

/*==============================================================*/
/* Table: PENCERAMAH                                            */
/*==============================================================*/
create or replace table PENCERAMAH 
(
   ID_PENCERAMAH        integer                        not null,
   NAMA_PENCERAMAH      varchar(50)                    null,
   NO_TELP              varchar(50)                    null,
   ALAMAT_PENCERAMAH    varchar(255)                   null,
   constraint PK_PENCERAMAH primary key clustered (ID_PENCERAMAH)
);

/*==============================================================*/
/* Index: PENCERAMAH_PK                                         */
/*==============================================================*/
-- create unique clustered index PENCERAMAH_PK on PENCERAMAH (
-- ID_PENCERAMAH ASC
-- );

/*==============================================================*/
/* Table: TEMPLATE_PESAN                                        */
/*==============================================================*/
create or replace table TEMPLATE_PESAN 
(
   ID_TEMPLATE          integer                        not null,
   ISI_PESAN            varchar(500)                   null,
   constraint PK_TEMPLATE_PESAN primary key clustered (ID_TEMPLATE)
);

/*==============================================================*/
/* Index: TEMPLATE_PESAN_PK                                     */
/*==============================================================*/
-- create unique clustered index TEMPLATE_PESAN_PK on TEMPLATE_PESAN (
-- ID_TEMPLATE ASC
-- );

alter table ACARA
   add constraint FK_ACARA_MEMPUNYAI_BILAL foreign key (ID_BILAL)
      references BILAL (ID_BILAL)
      on update restrict
      on delete restrict;

alter table ACARA
   add constraint FK_ACARA_MENGAMBIL_TEMPLATE foreign key (ID_TEMPLATE)
      references TEMPLATE_PESAN (ID_TEMPLATE)
      on update restrict
      on delete restrict;

alter table ACARA
   add constraint FK_ACARA_MENGINGAT_PENCERAM foreign key (ID_PENCERAMAH)
      references PENCERAMAH (ID_PENCERAMAH)
      on update restrict
      on delete restrict;

alter table ACARA
   add constraint FK_ACARA_MENGINPUT_ADMIN foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table BILAL
   add constraint FK_BILAL_MEMPUNYAI_ACARA foreign key (ID_ACARA)
      references ACARA (ID_ACARA)
      on update restrict
      on delete restrict;

alter table FOTO
   add constraint FK_FOTO_MEMILIKI_ACARA foreign key (ID_ACARA)
      references ACARA (ID_ACARA)
      on update restrict
      on delete restrict;

