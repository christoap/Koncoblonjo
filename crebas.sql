/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     20/02/2015 17:44:03                          */
/*==============================================================*/


drop table if exists BARANG;

drop table if exists DETAIL_TRANSAKSI;

drop table if exists KATEGORI;

drop table if exists TRANSAKSI;

drop table if exists USER;

/*==============================================================*/
/* Table: BARANG                                                */
/*==============================================================*/
create table BARANG
(
   ID_BARANG            varchar(10) not null,
   ID_KATEGORI          varchar(10),
   NAMA_BARANG          varchar(50) not null,
   HARGA                int not null,
   FOTO                 varchar(20) not null,
   primary key (ID_BARANG)
);

/*==============================================================*/
/* Table: DETAIL_TRANSAKSI                                      */
/*==============================================================*/
create table DETAIL_TRANSAKSI
(
   ID_BARANG            varchar(10) not null,
   ID_TRANSAKSI         varchar(10) not null,
   primary key (ID_BARANG, ID_TRANSAKSI)
);

/*==============================================================*/
/* Table: KATEGORI                                              */
/*==============================================================*/
create table KATEGORI
(
   ID_KATEGORI          varchar(10) not null,
   NAMA_KATEGORI        varchar(50) not null,
   primary key (ID_KATEGORI)
);

/*==============================================================*/
/* Table: TRANSAKSI                                             */
/*==============================================================*/
create table TRANSAKSI
(
   ID_TRANSAKSI         varchar(10) not null,
   NAMA_PEMBELI         varchar(50) not null,
   ALAMAT_PEMBELI       varchar(150) not null,
   NO_HP                varchar(15) not null,
   TOTAL                int not null,
   STATUS               int not null,
   primary key (ID_TRANSAKSI)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USERNAME             varchar(50) not null,
   PASSWORD             varchar(50) not null,
   primary key (USERNAME)
);

alter table BARANG add constraint FK_MEMPUNYAI foreign key (ID_KATEGORI)
      references KATEGORI (ID_KATEGORI) on delete restrict on update restrict;

alter table DETAIL_TRANSAKSI add constraint FK_MEMBELI foreign key (ID_BARANG)
      references BARANG (ID_BARANG) on delete restrict on update restrict;

alter table DETAIL_TRANSAKSI add constraint FK_MEMBELI2 foreign key (ID_TRANSAKSI)
      references TRANSAKSI (ID_TRANSAKSI) on delete restrict on update restrict;

