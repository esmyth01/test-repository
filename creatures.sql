/*
our first version of a creature table creatures.sql
*/

drop table if exists Creatures;

create table Creatures
( CreatureID int unsigned not null auto_increment primary key,
Name varchar(100),
Culture varchar(100),
Description text
);


insert into Creatures values (NULL,"Nessie","Scotish","THE Loch Ness Monster");
insert into Creatures values (NULL,"Chupacabra","Puerto Rican","Weird creature eats goats ");
insert into Creatures values (NULL,"Sasquatch","American","Tall hairy beast that roams the Pacific Northwest");
insert into Creatures values (NULL,"Jackalope","American","Part jackrabbit, part deer");
insert into Creatures values (NULL,"Minotaur","Greek","Body of a man, head of a bull");
insert into Creatures values (NULL,"Mermaid","Syrian","Half fish, half woman seductress");
insert into Creatures values (NULL,"Mothman","American","Part man, part moth with red glowing eyes");
insert into Creatures values (NULL,"Basalisk","Greek","King of all serpents, part snake and part rooster");
insert into Creatures values (NULL,"Werewolf","French","Man that changes into part wolf part man during full moons");
insert into Creatures values (NULL,"Sirens","Greek","Man-eating beautiful women whose song compels men to them");  



/*Country
Diet

Powers
Good or Evil
Defense Method
Costume
Wings
Eyes
Legs

*/
