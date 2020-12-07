function state_lga (s1, s2) {

	  var s1 = document.getElementById(s1);
	  var s2 = document.getElementById(s2);
	  s2.innerHTML = "";

	  if (s1.value == "Abia") {
	    var optionArray = ['abaNorth|Aba North', 'abaSouth|Aba South', 'arochukwu|Arochukwu', 'bende|Bende', 'ikwuano|Ikwuano', 'isialaNgwaNorth|Isiala Ngwa North', 'isialaNgwaSouth|Isiala Ngwa South', 'isuikwuato|Isuikwuato', 'obi Ngwa|Obi Ngwa', 'ohafia|Ohafia', 'osisioma|Osisioma', 'ugwunagbo|Ugwunagbo', 'ukwa East|Ukwa East', 'ukwa West|Ukwa West', 'umuahia North|Umuahia North', 'umuahiaSouth|Umuahia South', 'umu Nneochi|Umu Nneochi'];
	  }

	  else if (s1.value == "Adamawa") {
	    var optionArray = ['demsa|Demsa', 'fufure|Fufure', 'ganye|Ganye', 'gayuk|Gayuk', 'gombi|Gombi', 'grie|Grie', 'hong|Hong', 'jada|Jada', 'larmurde|Larmurde', 'madagali|Madagali', 'maiha|Maiha', 'mayoBelwa|Mayo Belwa', 'michika|Michika', 'mubiNorth|Mubi North', 'mubiSouth|Mubi South', 'numan|Numan', 'shelleng|Shelleng', 'song|Song', 'toungo|Toungo', 'yola North|Yola North', 'yola South|Yola South'];
	  }

	  else if (s1.value == "AkwaIbom") {
	    var optionArray = ['abak|Abak', 'easternObolo|Eastern Obolo', 'eket|Eket', 'esitEket|Esit Eket', 'essienUdim|Essien Udim', 'etimEkpo|Etim Ekpo', 'etinan|Etinan', 'ibeno|Ibeno', 'ibesikpoAsutan|Ibesikpo Asutan', 'ibiono-Ibom|Ibiono-Ibom', 'ika|Ika', 'ikono|Ikono', 'ikotAbasi|Ikot Abasi', 'ikot Ekpene|Ikot Ekpene', 'ini|Ini', 'itu|Itu', 'mbo|Mbo', 'mkpat-Enin|Mkpat-Enin', 'nsit-Atai|Nsit-Atai', 'nsit-Ibom|Nsit-Ibom', 'nsit-Ubium|Nsit-Ubium', 'obotAkara|Obot Akara', 'okobo|Okobo', 'onna|Onna', 'oron|Oron', 'orukAnam|Oruk Anam', 'udung-Uko|Udung-Uko', 'ukanafun|Ukanafun', 'uruan|Uruan', 'urue-OffongOruko|Urue-Offong Oruko', 'uyo|Uyo'];
	  }

	  else if (s1.value == "Anambra") {
	    var optionArray = ['aguata|Aguata', 'anambraEast|Anambra East', 'anambraWest|Anambra West', 'anaocha|Anaocha', 'awkaNorth|Awka North', 'awkaSouth|Awka South', 'ayamelum|Ayamelum', 'dunukofia|Dunukofia', 'ekwusigo|Ekwusigo', 'idemiliNorth|Idemili North', 'idemiliSouth|Idemili South', 'ihiala|Ihiala', 'njikoka|Njikoka', 'nnewiNorth|Nnewi North', 'nnewiSouth|Nnewi South', 'ogbaru|Ogbaru', 'onitshaNorth|Onitsha North', 'onitshaSouth|Onitsha South', 'orumbaNorth|Orumba North', 'orumbaSouth|Orumba South', 'oyi|Oyi'];
	  }

	  else if (s1.value == "Bauchi") {
	    var optionArray = ['alkaleri|Alkaleri', 'bauchi|Bauchi', 'bogoro|Bogoro', 'damban|Damban', 'darazo|Darazo', 'dass|Dass', 'gamawa|Gamawa', 'ganjuwa|Ganjuwa', 'giade|Giade', 'itas-Gadau|Itas-Gadau', 'jamaAre|Jama are', 'katagum|Katagum', 'kirfi|Kirfi', 'misau|Misau', 'ningi|Ningi', 'shira|Shira', 'tafawaBalewa|Tafawa Balewa', ' toro|Toro', ' warji|Warji', ' zaki|Zaki'];
	  }

	  else if (s1.value == "Bayelsa") {
	    var optionArray = ['brass|Brass', 'ekeremor|Ekeremor', 'kolokumaOpokuma|Kolokuma Opokuma', 'nembe|Nembe', 'ogbia|Ogbia', 'sagbama|Sagbama', 'southernIjaw|Southern Ijaw', 'yenagoa|Yenagoa'];
	  }

	  else if (s1.value == "Benue") {
	    var optionArray = ['agatu|Agatu', 'apa|Apa', 'ado|Ado', 'buruku|Buruku', 'gboko|Gboko', 'guma|Guma', 'gwerEast|Gwer East', 'gwerWest|Gwer West', 'katsina-Ala|Katsina-Ala', 'konshisha|Konshisha', 'kwande|Kwande', 'logo|Logo', 'makurdi|Makurdi', 'obi|Obi', 'ogbadibo|Ogbadibo', 'ohimini|Ohimini', 'oju|Oju', 'okpokwu|Okpokwu', 'oturkpo|Oturkpo', 'tarka|Tarka', 'ukum|Ukum', 'ushongo|Ushongo', 'vandeikya|Vandeikya'];
	  }

	  else if (s1.value == "Borno") {
	    var optionArray = ['abadam|Abadam', 'askira-Uba|Askira-Uba', 'bama|Bama', 'bayo|Bayo', 'biu|Biu', 'chibok|Chibok', 'damboa|Damboa', 'dikwa|Dikwa', 'gubio|Gubio', 'guzamala|Guzamala', 'gwoza|Gwoza', 'hawul|Hawul', 'jere|Jere', 'kaga|Kaga', 'kala-Balge|Kala-Balge', 'konduga|Konduga', 'kukawa|Kukawa', 'kwayaKusar|Kwaya Kusar', 'mafa|Mafa', 'magumeri|Magumeri', 'maiduguri|Maiduguri', 'marte|Marte', 'mobbar|Mobbar', 'monguno|Monguno', 'ngala|Ngala', 'nganzai|Nganzai', 'shani|Shani'];
	  }

	  else if (s1.value == "Cross Rivers") {
	    var optionArray = ['abi|Abi', 'akamkpa|Akamkpa', 'akpabuyo|Akpabuyo', 'bakassi|Bakassi', 'bekwarra|Bekwarra', 'biase|Biase', 'boki|Boki', 'calabarMunicipal|Calabar Municipal', 'calabarSouth|Calabar South', 'etung|Etung', 'ikom|Ikom', 'obanliku|Obanliku', 'obubra|Obubra', 'obudu|Obudu', 'odukpani|Odukpani', 'ogoja|Ogoja', 'yakuur|Yakuur', 'yala|Yala'];
	  }

	  else if (s1.value == "Delta") {
	    var optionArray = ['aniochaNorth|Aniocha North', 'aniochaSouth|Aniocha South', 'bomadi|Bomadi', 'burutu|Burutu', 'ethiopeEast|Ethiope East', 'ethiopeWest|Ethiope West', 'ikaNorthEast|Ika North East', 'ikaSouth|Ika South', 'isokoNorth|Isoko North', 'isokoSouth|Isoko South', 'ndokwaEast|Ndokwa East', 'ndokwaWest|Ndokwa West', 'okpe|Okpe', 'oshimiliNorth|Oshimili North', 'oshimiliSouth|Oshimili South', 'patani|Patani', 'sapele|Sapele', 'udu|Udu', 'ughelliNorth|Ughelli North', 'ughelliSouth|Ughelli South', 'ukwuani|Ukwuani', 'uvwie|Uvwie', 'warriNorth|Warri North', 'warriSouth|Warri South', 'warriSouthWest|Warri South West'];
	  }

	  else if (s1.value == "Ebonyi") {
	    var optionArray = ['abakaliki|Abakaliki', 'afikpoNorth|Afikpo North', 'afikpoSouth|Afikpo South', 'ebonyi|Ebonyi', 'ezzaNorth|Ezza North', 'ezzaSouth|Ezza South', 'ikwo|Ikwo', 'ishielu|Ishielu', 'ivo|Ivo', 'izzi|Izzi', 'ohaozara|Ohaozara', 'ohaukwu|Ohaukwu', 'onicha|Onicha'];
	  }

	  else if (s1.value == "Edo") {
	    var optionArray = ['akoko-Edo|Akoko-Edo', 'egor|Egor', 'esanCentral|Esan Central', 'esanNorth-East|Esan North-East', 'esanSouth-East|Esan South-East', 'esanWest|Esan West', 'etsakoCentral|Etsako Central', 'etsakoEast|Etsako East', 'etsakoWest|Etsako West', 'igueben|Igueben', 'ikpobaOkha|Ikpoba Okha', 'orhionmwon|Orhionmwon', 'oredo|Oredo', 'oviaNorth-East|Ovia North-East', 'oviaSouth-West|Ovia South-West', 'owanEast|Owan East', 'owanWest|Owan West', 'uhunmwonde|Uhunmwonde'];
	  }

	  else if (s1.value == "Ekiti") {
	    var optionArray = ['adoEkiti|Ado Ekiti', 'efon|Efon', 'ekitiEast|Ekiti East', 'ekitiSouth-West|Ekiti South-West', 'ekitiWest|Ekiti West', 'emure|Emure', 'gbonyin|Gbonyin', 'idoOsi|Ido Osi', 'ijero|Ijero', 'ikere|Ikere', 'ikole|Ikole', 'ilejemeje|Ilejemeje', 'irepodun-Ifelodun|Irepodun-Ifelodun', 'ise-Orun|Ise-Orun', 'moba|Moba', 'oye|Oye'];
	  }

	  else if (s1.value == "Enugu") {
	    var optionArray = ['aninri|Aninri', 'awgu|Awgu', 'enuguEast|Enugu East', 'enuguNorth|Enugu North', 'enuguSouth|Enugu South', 'ezeagu|Ezeagu', 'igboEtiti|Igbo Etiti', 'igboEzeNorth|Igbo Eze North', 'igboEzeSouth|Igbo Eze South', 'isiUzo|Isi Uzo', 'nkanuEast|Nkanu East', 'nkanuWest|Nkanu West', 'nsukka|Nsukka', 'ojiRiver|Oji River', 'udenu|Udenu', 'udi|Udi', 'uzoUwani|Uzo Uwani'];
	  }

	  else if (s1.value == "FCT") {
	    var optionArray = ['abaji|Abaji', 'bwari|Bwari', 'gwagwalada|Gwagwalada', 'kuje|Kuje', 'kwali|Kwali', 'municipalAreaCouncil|Municipal Area Council'];
	  }

	  else if (s1.value == "Gombe") {
	    var optionArray = ['akko|Akko', 'balanga|Balanga', 'billiri|Billiri', 'dukku|Dukku', 'funakaye|Funakaye', 'gombe|Gombe', 'kaltungo|Kaltungo', 'kwami|Kwami', 'nafada|Nafada', 'shongom|Shongom', 'yamaltu-Deba|Yamaltu-Deba'];
	  }

	  else if (s1.value == "Imo") {
	    var optionArray = ['abohMbaise|Aboh Mbaise', 'ahiazuMbaise|Ahiazu Mbaise', 'ehimeMbano|Ehime Mbano', 'ezinihitte|Ezinihitte', 'ideatoNorth|Ideato North', 'ideatoSouth|Ideato South', 'ihitte-Uboma|Ihitte-Uboma', 'ikeduru|Ikeduru', 'isialaMbano|Isiala Mbano', 'isu|Isu', 'mbaitoli|Mbaitoli', 'ngorOkpala|Ngor Okpala', 'njaba|Njaba', 'nkwerre|Nkwerre', 'nwangele|Nwangele', 'obowo|Obowo', 'oguta|Oguta', 'ohaji-Egbema|Ohaji-Egbema', 'okigwe|Okigwe', 'orlu|Orlu', 'orsu|Orsu', 'oruEast|Oru East', 'oruWest|Oru West', 'owerriMunicipal|Owerri Municipal', 'owerriNorth|Owerri North', 'owerriWest|Owerri West', 'unuimo|Unuimo'];
	  }

	  else if (s1.value == "Jigawa") {
	    var optionArray = ['auyo|Auyo', 'babura|Babura', 'biriniwa|Biriniwa', 'birninKudu|Birnin Kudu', 'buji|Buji', 'dutse|Dutse', 'gagarawa|Gagarawa', 'garki|Garki', 'gumel|Gumel', 'guri|Guri', 'gwaram|Gwaram', 'gwiwa|Gwiwa', 'hadejia|Hadejia', 'jahun|Jahun', 'kafinHausa|Kafin Hausa', 'kazaure|Kazaure', 'kiriKasama|Kiri Kasama', 'kiyawa|Kiyawa', 'kaugama|Kaugama', 'maigatari|Maigatari', 'malamMadori|Malam Madori', 'miga|Miga', 'ringim|Ringim', 'roni|Roni', 'suleTankarkar|Sule Tankarkar', 'taura|Taura', 'yankwashi|Yankwashi']; 
	  }

	  else if (s1.value == "Kaduna") {
	    var optionArray = ['birninGwari|Birnin Gwari', 'chikun|Chikun', 'giwa|Giwa', 'igabi|Igabi', 'ikara|Ikara', 'jaba|Jaba', 'jemaA|Jema a', 'kachia|Kachia', 'kadunaNorth|Kaduna North', 'kadunaSouth|Kaduna South', 'kagarko|Kagarko', 'kajuru|Kajuru', 'Kaura|Kaura', 'kauru|Kauru', 'kubau|Kubau', 'kudan|Kudan', 'lere|Lere', 'makarfi|Makarfi', 'sabonGari|Sabon Gari', 'sanga|Sanga', 'soba|Soba', 'zangonKataf|Zangon Kataf', 'zaria|Zaria'];
	  }

	  else if (s1.value == "Kano") {
	    var optionArray = ['ajingi|Ajingi', 'albasu|Albasu', 'bagwai|Bagwai', 'bebeji|Bebeji', 'bichi|Bichi', 'bunkure|Bunkure', 'dala|Dala', 'dambatta|Dambatta', 'dawakinKudu|Dawakin Kudu', 'dawakinTofa|Dawakin Tofa', 'doguwa|Doguwa', 'fagge|Fagge', 'gabasawa|Gabasawa', 'garko|Garko', 'garunMallam|Garun Mallam', 'gaya|Gaya', 'gezawa|Gezawa', 'gwale|Gwale', 'gwarzo|Gwarzo', 'kabo|Kabo', 'kanoMunicipal|Kano Municipal', 'karaye|Karaye', 'kibiya|Kibiya', 'kiru|Kiru', 'kumbotso|Kumbotso', 'kunchi|Kunchi', 'kura|Kura', 'madobi|Madobi', 'makoda|Makoda', 'minjibir|Minjibir', 'nasarawa|Nasarawa', 'rano|Rano', 'riminGado|Rimin Gado', 'rogo|Rogo', 'shanono|Shanono', 'sumaila|Sumaila', 'takai|Takai', 'tarauni|Tarauni', 'tofa|Tofa', 'tsanyawa|Tsanyawa', 'tudunWada|Tudun Wada', 'ungogo|Ungogo', 'warawa|Warawa', 'wudil|Wudil'];
	  }

	  else if (s1.value == "Katsina") {
	    var optionArray = ['bakori|Bakori', 'batagarawa|Batagarawa', 'batsari|Batsari', 'baure|Baure', 'bindawa|Bindawa', 'charanchi|Charanchi', 'dandume|Dandume', 'danja|Danja', 'danMusa|Dan Musa', 'daura|Daura', 'dutsi|Dutsi', 'dutsinMa|Dutsin Ma', 'faskari|Faskari', 'funtua|Funtua', 'ingawa|Ingawa', 'jibia|Jibia', 'kafur|Kafur', 'kaita|Kaita', 'kankara|Kankara', 'kankia|Kankia', 'katsina|Katsina', 'kurfi|Kurfi', 'kusada|Kusada', 'maiAdua|Mai Adua', 'malumfashi|Malumfashi', 'mani|Mani', 'mashi|Mashi', 'matazu|Matazu', 'musawa|Musawa', 'rimi|Rimi', 'sabuwa|Sabuwa', 'safana|Safana', 'sandamu|Sandamu', 'zango|Zango'];
	  }

	  else if (s1.value == "Kebbi") {
	    var optionArray =['aleiro|Aleiro', 'arewaDandi|Arewa Dandi', 'argungu|Argungu', 'augie|Augie', 'bagudo|Bagudo', 'birninKebbi|Birnin Kebbi', 'bunza|Bunza', 'dandi|Dandi', 'fakai|Fakai', 'gwandu|Gwandu', 'jega|Jega', 'kalgo|Kalgo', 'kokoBesse|Koko Besse', 'maiyama|Maiyama', 'ngaski|Ngaski', 'sakaba|Sakaba', 'shanga|Shanga', 'suru|Suru', 'wasaguDanko|Wasagu Danko', 'yauri|Yauri', 'zuru|Zuru'];
	  }

	  else if (s1.value == "Kogi") {
	    var optionArray = ['adavi|Adavi', 'ajaokuta|Ajaokuta', 'ankpa|Ankpa', 'bassa|Bassa', 'dekina|Dekina', 'ibaji|Ibaji', 'idah|Idah', 'igalamelaOdolu|Igalamela Odolu', 'ijumu|Ijumu', 'kabbaBunu|Kabba Bunu', 'kogi|Kogi', 'lokoja|Lokoja', 'mopaMuro|Mopa Muro', 'ofu|Ofu', 'ogoriMagongo|Ogori Magongo', 'okehi|Okehi', 'okene|Okene', 'olamaboro|Olamaboro', 'omala|Omala', 'yagbaEast|Yagba East', 'yagbaWest|Yagba West'];
	  }

	  else if (s1.value == "Kwara") {
	    var optionArray = ['asa|Asa', 'baruten|Baruten', 'edu|Edu', 'ekiti|Ekiti', 'ifelodun|Ifelodun', 'ilorinEast|Ilorin East', 'ilorinSouth|Ilorin South', 'ilorinWest|Ilorin West', 'irepodun|Irepodun', 'isin|Isin', 'kaiama|Kaiama', 'moro|Moro', 'offa|Offa', 'okeEro|Oke Ero', 'oyun|Oyun', 'pategi|Pategi'];
	  }

	  else if (s1.value == "Lagos") {
	    var optionArray = ['agege|Agege', 'ajeromi-Ifelodun|Ajeromi-Ifelodun', 'alimosho|Alimosho', 'amuwo-Odofin|Amuwo-Odofin', 'apapa|Apapa', 'badagry|Badagry', 'epe|Epe', 'etiOsa|Eti Osa', 'ibeju-Lekki|Ibeju-Lekki', 'ifako-Ijaiye|Ifako-Ijaiye', 'ikeja|Ikeja', 'ikorodu|Ikorodu', 'kosofe|Kosofe', 'lagosIsland|Lagos Island', 'lagosMainland|Lagos Mainland', 'mushin|Mushin', 'ojo|Ojo', 'oshodi-Isolo|Oshodi-Isolo', 'shomolu|Shomolu', 'surulere|Surulere'];
	  }

	  else if (s1.value == "Nasarawa") {
	    var optionArray = ['akwanga|Akwanga', 'awe|Awe', 'doma|Doma', 'karu|Karu', 'keana|Keana', 'keffi|Keffi', 'kokona|Kokona', 'lafia|Lafia', 'nasarawa|Nasarawa', 'nasarawaEgon|Nasarawa Egon', 'obi|Obi', 'toto|Toto', 'wamba|Wamba'];
	  }

	  else if (s1.value == "Niger") {
	    var optionArray = ['agaie|Agaie', 'agwara|Agwara', 'bida|Bida', 'borgu|Borgu', 'bosso|Bosso', 'chanchaga|Chanchaga', 'edati|Edati', 'gbako|Gbako', 'gurara|Gurara', 'katcha|Katcha', 'kontagora|Kontagora', 'lapai|Lapai', 'lavun|Lavun', 'magama|Magama', 'mariga|Mariga', 'mashegu|Mashegu', 'mokwa|Mokwa', 'moya|Moya', 'paikoro|Paikoro', 'rafi|Rafi', 'rijau|Rijau', 'shiroro|Shiroro', 'suleja|Suleja', 'tafa|Tafa', 'wushishi|Wushishi'];
	  }

	  else if (s1.value == "Ogun") {
	    var optionArray = ['abeokutaNorth|Abeokuta North', 'abeokutaSouth|Abeokuta South', 'ado-OdoOta|Ado-Odo Ota', 'egbadoNorth|Egbado North', 'egbadoSouth|Egbado South', 'ewekoro|Ewekoro', 'ifo|Ifo', 'ijebuEast|Ijebu East', 'ijebuNorth|Ijebu North', 'ijebuNorthEast|Ijebu North East', 'ijebuOde|Ijebu Ode', 'ikenne|Ikenne', 'imekoAfon|Imeko Afon', 'ipokia|Ipokia', 'obafemiOwode|Obafemi Owode', 'odeda|Odeda', 'odogbolu|Odogbolu', 'ogunWaterside|Ogun Waterside', 'remoNorth|Remo North', 'shagamu|Shagamu'];
	  }

	  else if (s1.value == "Ondo") {
	    var optionArray = ['akokoNorth-East|Akoko North-East', 'akokoNorth-West|Akoko North-West', 'akokoSouth-West|Akoko South-West', 'akokoSouth-East|Akoko South-East', 'akureNorth|Akure North', 'akureSouth|Akure South', 'eseOdo|Ese Odo', 'idanre|Idanre', 'ifedore|Ifedore', 'ilaje|Ilaje', 'ileOluji-Okeigbo|Ile Oluji-Okeigbo', 'irele|Irele', 'odigbo|Odigbo', 'okitipupa|Okitipupa', 'ondoEast|Ondo East', 'ondoWest|Ondo West', 'ose|Ose', 'owo|Owo'];
	  }

	  else if (s1.value == "Osun") {
	    var optionArray = ['atakunmosaEast|Atakunmosa East', 'atakunmosaWest|Atakunmosa West', 'aiyedaade|Aiyedaade', 'aiyedire|Aiyedire', 'boluwaduro|Boluwaduro', 'boripe|Boripe', 'edeNorth|Ede North', 'edeSouth|Ede South', 'ifeCentral|Ife Central', 'ifeEast|Ife East', 'ifeNorth|Ife North', 'ifeSouth|Ife South', 'egbedore|Egbedore', 'ejigbo|Ejigbo', 'ifedayo|Ifedayo', 'ifelodun|Ifelodun', 'ila|Ila', 'ilesaEast|Ilesa East', 'ilesaWest|Ilesa West', 'irepodun|Irepodun', 'irewole|Irewole', 'isokan|Isokan', 'iwo|Iwo', 'obokun|Obokun', 'odoOtin|Odo Otin', 'olaOluwa|Ola Oluwa', 'olorunda|Olorunda', 'oriade|Oriade', 'orolu|Orolu', 'osogbo|Osogbo'];
	  }

	  else if (s1.value == "Oyo") {
	    var optionArray = ['afijio|Afijio', 'akinyele|Akinyele', 'atiba|Atiba', 'atisbo|Atisbo', 'egbeda|Egbeda', 'ibadanNorth|Ibadan North', 'ibadanNorth-East|Ibadan North-East', 'ibadanNorth-West|Ibadan North-West', 'ibadanSouth-East|Ibadan South-East', 'ibadanSouth-West|Ibadan South-West', 'ibarapaCentral|Ibarapa Central', 'ibarapaEast|Ibarapa East', 'ibarapaNorth|Ibarapa North', 'ido|Ido', 'irepo|Irepo', 'iseyin|Iseyin', 'itesiwaju|Itesiwaju', 'iwajowa|Iwajowa', 'kajola|Kajola', 'lagelu|Lagelu', 'ogbomoshoNorth|Ogbomosho North', 'ogbomoshoSouth|Ogbomosho South', 'ogoOluwa|Ogo Oluwa', 'olorunsogo|Olorunsogo', 'oluyole|Oluyole', 'onaAra|Ona Ara', 'orelope|Orelope', 'oriIre|Ori Ire', 'oyo|Oyo', 'oyoEast|Oyo East', 'sakiEast|Saki East', 'sakiWest|Saki West', 'surulere|Surulere'];
	  }

	  else if (s1.value == "Plateau") {
	    var optionArray = ['bokkos|Bokkos', 'barkinLadi|Barkin Ladi', 'bassa|Bassa', 'josEast|Jos East', 'josNorth|Jos North', 'josSouth|Jos South', 'kanam|Kanam', 'kanke|Kanke', 'langtangSouth|Langtang South', 'langtangNorth|Langtang North', 'mangu|Mangu', 'mikang|Mikang', 'pankshin|Pankshin', 'quaAnPan|Qua an Pan', 'riyom|Riyom', 'shendam|Shendam', 'wase|Wase'];
	  }

	  else if (s1.value == "Rivers") {
	    var optionArray = ['abuaOdual|Abua Odual', 'ahoadaEast|Ahoada East', 'ahoadaWest|Ahoada West', 'akuku-Toru|Akuku-Toru', 'andoni|Andoni', 'asari-Toru|Asari-Toru', 'bonny|Bonny', 'degema|Degema', 'eleme|Eleme', 'emuoha|Emuoha', 'etche|Etche', 'gokana|Gokana', 'ikwerre|Ikwerre', 'khana|Khana', 'obioAkpor|Obio Akpor', 'ogbaEgbemaNdoni|Ogba Egbema Ndoni', 'oguBolo|Ogu Bolo', 'okrika|Okrika', 'omuma|Omuma', 'opoboNkoro|Opobo Nkoro', 'oyigbo|Oyigbo', 'portHarcourt|Port Harcourt', 'tai|Tai'];
	  }

	  else if (s1.value == "Sokoto") {
	    var optionArray = ['binji|Binji', 'bodinga|Bodinga', 'dangeShuni|Dange Shuni', 'gada|Gada', 'goronyo|Goronyo', 'gudu|Gudu', 'gwadabawa|Gwadabawa', 'illela|Illela', 'isa|Isa', 'kebbe|Kebbe', 'kware|Kware', 'rabah|Rabah', 'sabonBirni|Sabon Birni', 'shagari|Shagari', 'silame|Silame', 'sokotoNorth|Sokoto North', 'sokotoSouth|Sokoto South', 'tambuwal|Tambuwal', 'tangaza|Tangaza', 'tureta|Tureta', 'wamako|Wamako', 'wurno|Wurno', 'yabo|Yabo'];
	  }

	  else if (s1.value == "Taraba") {
	    var optionArray = ['ardoKola|Ardo Kola', 'bali|Bali', 'donga|Donga', 'gashaka|Gashaka', 'gassol|Gassol', 'ibi|Ibi', 'jalingo|Jalingo', 'karimLamido|Karim Lamido', 'kumi|Kumi', 'lau|Lau', 'sardauna|Sardauna', 'takum|Takum', 'ussa|Ussa', 'wukari|Wukari', 'yorro|Yorro', 'zing|Zing'];
	  }

	  else if (s1.value == "Yobe") {
	    var optionArray = ['bade|Bade', 'bursari|Bursari', 'damaturu|Damaturu', 'fika|Fika', 'fune|Fune', 'geidam|Geidam', 'gujba|Gujba', 'gulani|Gulani', 'jakusko|Jakusko', 'karasuwa|Karasuwa', 'machina|Machina', 'nangere|Nangere', 'nguru|Nguru', 'potiskum|Potiskum', 'tarmuwa|Tarmuwa', 'yunusari|Yunusari', 'yusufari|Yusufari'];
	  }

	  else if (s1.value == "Zamfara") {
	    var optionArray = ['anka|Anka', 'bakura|Bakura', 'birninMagajiKiyaw|Birnin Magaji Kiyaw', 'bukkuyum|Bukkuyum', 'bungudu|Bungudu', 'gummi|Gummi', 'gusau|Gusau', 'kauraNamoda|Kaura Namoda', 'maradun|Maradun', 'maru|Maru', 'shinkafi|Shinkafi', 'talataMafara|Talata Mafara', 'chafe|Chafe', 'zurmi|Zurmi'];
	  }

	  for (var option in optionArray) {
	    var pair = optionArray[option].split("|");
	    var newOption = document.createElement("option");
	    newOption.value = pair[1];
	    newOption.innerHTML = pair[1];
	    s2.options.add(newOption);
	  }

}

/* jQuery(window).on('load',function() {
        $("#state").change(function(){            
            var id = $(this).val(); 
            var sid = eval(id); 
});

 else if (s1.value == "Sokoto") {
	    var optionArray = ['select|Select LGA', 'binji|Binji', 'bodinga|Bodinga', 'dangeShuni|Dange Shuni', 'gada|Gada', 'goronyo|Goronyo', 'gudu|Gudu', 'gwadabawa|Gwadabawa', 'illela|Illela', 'isa|Isa', 'kebbe|Kebbe', 'kware|Kware', 'rabah|Rabah', 'sabonBirni|Sabon Birni', 'shagari|Shagari', 'silame|Silame', 'sokotoNorth|Sokoto North', 'sokotoSouth|Sokoto South', 'tambuwal|Tambuwal', 'tangaza|Tangaza', 'tureta|Tureta', 'wamako|Wamako', 'wurno|Wurno', 'yabo|Yabo'];
	  }

*/










