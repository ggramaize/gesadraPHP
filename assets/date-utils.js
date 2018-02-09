function TD(n){
	return n.toString().replace(/^(\d)$/,'0$1')
}

function DateLocale(d){
	var tabJours={'fr':['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi','Dimanche']}
	var tabMois={'fr':['01', '02', '03', '04', '05', '06','07','08','09','10','11','12']}

	var SysLang=(navigator.userLanguage)?navigator.userLanguage:navigator.language;

	switch (SysLang){
	case ('fr'):
		DateLang='fr'
		break;
	default: 
		DateLang='fr';
	}

	var Mois=tabMois[DateLang][d.getMonth()];
	return d.getDate()+"/"+ Mois +"/"+d.getFullYear()+" "+TD(d.getHours())+":"+TD(d.getMinutes());
}

