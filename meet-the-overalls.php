<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet The Overalls | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
    array(
      'name'                  =>  'Keith Shopa',
      'position'              =>  'Overall Director',
      'email'                 =>  'kshopa@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Morale Captain, Morale Overall',
      'grad'                  =>  'Masters in Health Education & Behavior',
      'undergrad'             =>  'Bachelor of Science',
      'hometown'              =>  'Port Charlotte, FL',
      'outside_involvement'   =>  'Camp Kesem, Young Leaders Conference, Global Medical Training, Gators March for Babies, UFHealth Volunteer',
      'free_time'             =>  'I enjoy spending time with my family and friends, watching movies, exercising, traveling and listening to &#39;N Sync (the greatest band ever).',
      'fun_fact'              =>  'I live on a farm, with just about every critter you can think of!',
      'favorite_memory'       =>  '<p>Witnessing the pure energy, and excitement of my Morale team last year when they broke our team&#39;s fundraising goal just days before the event!</p>',
      'motivation'            =>  '<p>It&#39;s not often that an individual can put forth an effort to make a difference and actually see that change take place and benefit the lives of others. With Dance Marathon though they can. When I signed up to be a dancer my freshmen year I had no idea how incredible of an experience it would be or that I was embarking on a journey with Dance Marathon and Children&#39;s Miracle Network that would define the man I would grow to be. With every miracle story I heard, or line-dance I danced for those 26.2 hours I soon learned that I wanted to help the culture that is Dance Marathon grow from that point on.</p><p>Not a day goes by where I don&#39;t think about the event and the difference it makes for the kids. I&#39;m so honored to be able to use my experiences to represent this organization in its 22nd year. In my time being involved with DM, I&#39;ve seen a community come together to make a difference. I&#39;ve seen a culture spread across the campus. I&#39;ve seen children defy the odds stacked against them and do it with a smile on their face. All I can say now is that I can&#39;t wait to be a part of what comes next!</p>',
      'image'                 =>  'Keith'
    ),
    array(
      'name'                  =>  'Mackenzie LaPorte',
      'position'              =>  'External Communication Overall',
      'email'                 =>  'mlaporte@floridadm.org',
      'previous_involvement'  =>  'Morale Staff, Marketing Captain, Marketing Overall',
      'major'                 =>  'Marketing',
      'minor'                 =>  '',
      'hometown'              =>  'Ponte Vedra Beach, FL',
      'outside_involvement'   =>  'Panhellenic Council, Ad Society, American Marketing Association',
      'free_time'             =>  'I like to spend time with my friends exploring Gainesville, travel anywhere I can and listening to music!',
      'fun_fact'              =>  'Fruity pebbles are my all-time-favorite cereal',
      'favorite_memory'       =>  '<p>My favorite DM memory would definitely be the feeling in the O&#39;Dome when we raised the numbers for our 2 million dollar record this past year. The looks of shock, happiness, and emotion on everyone&#39;s faces were amazing.</p>',
      'motivation'            =>  '<p>What motivates me with DM is every interaction I have had with a miracle child. From shooting hoops with Nick Mullen, to playing paper airplanes with Kaedyn, those are the moments I&#39;m lucky to have with the amazing kids of Shands that make giving my time to DM worthwhile. </p>',
      'image'                 =>  'Mackenzie'
    ),
    array(
      'name'                  =>  'Jenna Baxter',
      'position'              =>  'Internal Communication Overall',
      'email'                 =>  'jbaxter@floridadm.org',
      'previous_involvement'  =>  'Marketing Captain, Recruitment Captain, Recruitment Overall',
      'major'                 =>  'Management',
      'minor'                 =>  '',
      'hometown'              =>  'Wellington, FL',
      'outside_involvement'   =>  'Panhellenic Council',
      'free_time'             =>  'I like to exercise, cook food and travel',
      'fun_fact'              =>  'I pole vaulted in high school.',
      'favorite_memory'       =>  '<p>My favorite Dance Marathon memory is this year when the Recruitment Team planned Nate, our miracle child, a birthday party. The theme was based off his favorite show, Phineas and Ferb. When Nate and his family walked through the door, it was the most amazing feeling. Nate and his sisters has so much fun and the whole family was so appreciative. The smile on their faces will forever motivate and remind me why I do Dance Marathon.</p>',
      'motivation'            =>  '<p>As a captain my freshman year, I didn&#39;t know what to expect for my first Dance Marathon. Walking into the O&#39;Connell Center, I realized how this event was bigger than myself. The event allowed students to be apart of something so amazing and life-changing to the ones standing for 26.2 hours, but also the Miracle Families at Children&#39;s Miracle Network. I knew I was going to be apart of Dance Marathon throughout my college years and after.</p>',
      'image'                 =>  'Jenna'
    ),
    array(
      'name'                  =>  'Garrett Robertson',
      'position'              =>  'Finance Overall',
      'email'                 =>  'grobertson@floridadm.org',
      'previous_involvement'  =>  'Dancer, Operations Staff, Finance Captain',
      'major'                 =>  'Business Economics and International Studies',
      'minor'                 =>  'Spanish',
      'hometown'              =>  'Tampa, FL',
      'outside_involvement'   =>  'Gainesville Reads, Student Government, Reitz Scholars, Florida Blue Key',
      'free_time'             =>  'I like to exercise, hangout with friends, watch netflix, or any combination of the three.',
      'fun_fact'              =>  'I love to travel and have been to 19 countries and 20 states',
      'favorite_memory'       =>  '<p>As a Finance Captain, during the event all of us are stuck in a back room counting coins and inputing checks. We didn&#39;t have much interaction with people outside of our room, but at one point in the evening the miracle children had a scavenger hunt, and one of their clues led them to the finance room. It was the greatest thing to see their smiling faces all come in and greet us, they were so appreciative of everything we were doing. It really put into perspective that every dollar raised is a miracle, and I&#39;m so happy to do anything for the kids.</p>',
      'motivation'            =>  '<p>Dance Marathon is something that grows on you a little bit everyday, from meeting families, to seeing what our fundraising directly goes to, its just always on your mind. Knowing that I can make a positive impact in someone else&#39;s life by doing something I love is the best thing in the world. I&#39;m motivated by all of the good DM has done, and the boundaries we continuously push to make DM at UF even greater.</p>',
      'image'                 =>  'Garrett'
    ),
    array(
      'name'                  =>  'Leland Van Alstyne',
      'position'              =>  'Multimedia Overall',
      'email'                 =>  'lvanalstyne@floridadm.org',
      'previous_involvement'  =>  'Art & Layout Captain',
      'major'                 =>  'Photography',
      'minor'                 =>  '',
      'hometown'              =>  'Bradenton, FL',
      'outside_involvement'   =>  'Delta Zeta Sorority',
      'free_time'             =>  'I love to photograph everything (duh). Traveling, music festivals, and adventuring with friends and family are what consumes most of my time. And Netflix...',
      'fun_fact'              =>  'I have lived in New York, Massachusetts, California, New Hampshire and Florida.',
      'favorite_memory'       =>  '<p>My favorite DM memory is from last year, I was up front by the stage taking all those beautiful ugly crying photos of everyone after the final total was revealed, when finally I couldn&#39;t see anything (because I was ugly crying, just behind my camera) and Zander&#39;s mom, who had no idea who I was, hugged me and started thanking me for everything we had done for her family and the Children&#39;s Miracle Network. I obviously knew that what we were doing was amazing and that we were making a difference, but when she was saying all those wonderful things about Dance Marathon at UF I finally felt the impact of it all and was unbelievably proud of everyone in the O&#39;Dome. I have carried that feeling with me since then. </p>',
      'motivation'            =>  '<p>The amazing people I have worked with throughout my years with Dance Marathon motivate me. Their ceaseless passion, creativity and strength inspires me to give my all to Dance Marathon at UF. The Miracle Children posses so much hope and courage that its contagious. The children and their families are a constant reminder of why we are doing this and what we are doing this for.</p>',
      'image'                 =>  'Leland'
    ),
    array(
      'name'                  =>  'Matthew Weider',
      'position'              =>  'Community Events Overall',
      'email'                 =>  'mweider@floridadm.org',
      'previous_involvement'  =>  'Two-year Entertainment Captain, Community Events Captain',
      'major'                 =>  'Health Administration',
      'minor'                 =>  '',
      'hometown'              =>  'Plantation, FL',
      'outside_involvement'   =>  'Health Administration Student Association ',
      'free_time'             =>  'I enjoy sailing, jet skiing, paddle boarding, rock climbing, exercising and finding great restaurants in Gainesville.',
      'fun_fact'              =>  'I am one of the most accident-prone people you will ever meet; seriously I trip over my own two feet, yet I haven&#39;t broken a bone!',
      'favorite_memory'       =>  '<p>Hands down it has to be during my first year as a captain. During the wee hours of Sunday morning- sometime between 4 or 5 am- one of the final acts goes on stage. Once the act got announced over the speakers in the O&#39;Dome, I swear I saw the dancers bodies move toward the stage before their heads did. It sent me reeling for a few minutes, then the strangest thing happened. I saw their faces start to light up as the act started to play and it was in that moment that I realized how important the music and bands were to keeping the dancers motivated and on their feet. </p>',
      'motivation'            =>  '<p>During my first year as a captain, I had no idea what I was getting myself into and I had not interacted with many miracle families at that point. All I knew was that the money I was raising was going to help sick kids in the hospital.  During my first fall as a captain, I went on a tour of the hospital, as they were showing us around the children&#39;s wing we passed by a party they were having for the Miracle Children. Out of no where Nate comes racing out of the room, oxygen tank in tow, stops in front of a painting he liked and then proceeds to start climbing on his oxygen tank to get a closer look. While this was occurring, I was freaking out in my head that he was going to fall and injure himself, but afterwards I realized that these Miracle Children are just like every other kid their age despite their illnesses. I was amazed that despite everything that they had been through, they still acted like any other little kid and were excited about life and the day before them.  This was something I had never seen before and I admired them for it. It was this moment that I was able to put a face to the cause and when I became committed to doing everything I could for these kids. This was when the miracle children became my heroes!</p> <p>From Nate blasting out of that room, to Nick winning bowling championships after championships, to little Isabella taking wobbly steps at the 5K this year, these kids are the reason why I continue to support Dance Marathon and Children’s Miracle Network. To support the little heroes I have seen and because of the possibilities of curing some of these diseases for good. I am a Dance Marathon junkie, fanatic, enthusiast and will continue to give 110 percent for them. </p>',
      'image'                 =>  'Matt'
    ),
    array(
      'name'                  =>  'Emily Coyle',
      'position'              =>  'Dancer Relations Overall',
      'email'                 =>  'ecoyle@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Dancer Relations Captain',
      'major'                 =>  'Biochem/PreMed',
      'minor'                 =>  '',
      'hometown'              =>  'Maywood, NJ',
      'outside_involvement'   =>  'Panhellenic Council, UF Health Volunteer, UF GSD Research Assistant',
      'free_time'             =>  'I love to adventure through Gainesville, spend time with my friends and family, watch Netflix and take naps.',
      'fun_fact'              =>  'I was on an MTV game show called "The Substitute" when I was in high school.',
      'favorite_memory'       =>  '<p>During my freshman year I was lucky enough to be a dancer for the event. I remember as they raised the total at the end of the 26.2 hours, they had "Carry On" by FUN playing and I (along with the rest of the people in the O&#39;Connell Center) started crying after we realized that we raised $1 million for the first time in Dance Marathon at the University of Florida history. That song will forever remind me of that moment.</p>',
      'motivation'            =>  '<p>Dance Marathon has given me the opportunity to see the miracles that can be made when a group of students come together to help these amazing children at UF Health Shands Children&#39;s Hospital. I want to dedicate my life to helping kids just be kids, and that pushes me everyday to work hard in everything that I do. </p>',
      'image'                 =>  'Emily'
    ),
    array(
      'name'                  =>  'Annaleigh Bonds',
      'position'              =>  'Entertainment Overall',
      'email'                 =>  'abonds@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Entertainment Captain',
      'major'                 =>  'Public Relations',
      'minor'                 =>  'Entrepreneurship',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'Sigma Kappa Sorority, Events Director/Vice President of Swamp Records, PRSSA community service committee',
      'free_time'             =>  'I love to travel, see live music and spend time outdoors with friends and family. ',
      'fun_fact'              =>  'My only sibling is 15 years older than me and yes he is my full, biological brother so... woops.',
      'favorite_memory'       =>  '<p>Besides the emotional experience that is closing ceremonies, my best DM memories revolve around the times I get to bond with my team, whether it be filming silly videos, having potlucks or having heart to hearts about the kind of impact we are making.</p>',
      'motivation'            =>  '<p>A simple smile and thank you from a miracle child and/or family member who is suffering. To feel I am making a positive difference in someone else&#39;s life is the greatest reward imaginable for me. </p>',
      'image'                 =>  'Annaleigh'
    ),
    array(
      'name'                  =>  'Allison Buenaga',
      'position'              =>  'Family Relations Overall',
      'email'                 =>  'abuenaga@floridadm.org',
      'previous_involvement'  =>  'Dancer, Family Relations Captain',
      'major'                 =>  'Sociology',
      'minor'                 =>  '',
      'hometown'              =>  'Ponte Vedra Beach, FL',
      'outside_involvement'   =>  'Stronger than Stigma at the University of Florida, Delta Zeta Sorority',
      'free_time'             =>  'I love watching any show on TLC, dancing and laughing with my friends!',
      'fun_fact'              =>  'I have an extreme fear of cows.',
      'favorite_memory'       =>  '<p>My favorite Dance Marathon memory was seeing the total reveal this past year at Dance Marathon 2015. Fundraising above $2,000,000 was such an incredible milestone to be a part of. I will never forget seeing Nick and Nate, two of our miracle children, crying. When I saw tears streaming down their faces I realized that they are able to understand that their lives have been impacted by Dance Marathon. Numerous miracle families were coming up to me and thanking me for all that we do, really though, I should be thanking them because they have all taught us so much.</p>',
      'motivation'            =>  '<p>Being the Family Relations Overall allows me to work very closely with all of our Miracle Families. These amazing families motivate me each and everyday. The miracle children are my true heroes and they inspire me to never give up on life and to always have a smile on my face.  Seeing them extremely happy and carefree shows me how Dance Marathon at the University of Florida has impacted them. They have changed my life in numerous ways and I am so grateful to have met each and every one of them. There are truly not enough words to describe how much Dance Marathon means to me, but I know it is something that I will carry with me forever.</p>',
      'image'                 =>  'Buenaga'
    ),
    array(
      'name'                  =>  'Alexa Podolsky',
      'position'              =>  'Hospitality Overall',
      'email'                 =>  'apodolsky@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Hospitality Captain',
      'grad'                  =>  'Masters in Management',
      'undergrad'             =>  'Major in Food Science and Minor in Packaging Science',
      'hometown'              =>  'Weston, FL',
      'outside_involvement'   =>  'Food Science and Human Nutrition Club, Alpha Epsilon Phi Sorority',
      'free_time'             =>  'Hang out with friends and family, cook (and eat!)',
      'fun_fact'              =>  'I like every food except olives and pickles',
      'favorite_memory'       =>  '<p>Freshman year, seeing the 1.15 million dollar total go up, and the instant tears which followed</p>',
      'motivation'            =>  '<p>The Kids! Being with them, seeing their ups and downs, and knowing I can make a difference.</p>',
      'image'                 =>  'Alexa'
    ),
    array(
      'name'                  =>  'Drew Carlton',
      'position'              =>  'Marathon Relations Overall ',
      'email'                 =>  'dcarlton@floridadm.org',
      'previous_involvement'  =>  'Dancer,Marathon Relations Captain',
      'major'                 =>  'Microbiology and Cell Science',
      'minor'                 =>  'Business Administration',
      'hometown'              =>  'Sanibel, FL',
      'outside_involvement'   =>  'In addition to my position on the Overall Team, I am an active member of the Florida Cicerones, the official student ambassadors of UF where I serve as the committee chair for Dance Marathon within the organization. I am a member of the Sigma Chi fraternity having served as Rush Chair, Public Relations Chair and responsible for organizing the Derby Days Philanthropy benefiting Shand’s Children Miracle Network Hospital and the Huntsman Cancer Foundation. I also remain involved within the Honors Program, HHMI undergraduate research organization, volunteer at the American Cancer Society and have served as an Assistant Director for Gator Growl. ',
      'free_time'             =>  'What’s free time? I do my best to run and workout, spend my time long boarding, hearing live music, playing sports and going to the beach.  ',
      'fun_fact'              =>  'I have 14 siblings. Yes, 14. I’m also red and green color-blind.',
      'favorite_memory'       =>  '<p>My favorite DM memory comes from a High School Dance Marathon when I first met Zander, one of the miracle children. Throughout my life I have had the great benefit of watching my younger siblings grow up. One of the most moving experiences is understanding that within every child is the sole desire to be a kid - to be carefree, imaginative and love without boundaries. Despite Zander’s condition, he will continue to play until he physically needs to stop. As we were playing a game during one of the theme hours, I saw within him the sole desire to be like every other kid. His positivity, love of life, and unending strength that day will remain one of my favorite memories. </p>',
      'motivation'            =>  '<p>I had class one semester in Shands Medical Sciences Building, the same area where the Children&#39;s Miracle Network Hospital is located. Every day that I walked to class I would pass by a plaque on the wall with a quote from Winston Churchill that read, “We make a living by what we get, but we make a life by what we give.” Dance Marathon has given me the opportunity to make a life. In my opinion, everyone has a favorite word whether they realize it or not. Mine happens to be a relatively simple four-letter word we whisper to ourselves and echo through our lives: hope. Hope is how Dance Marathon is able to give, grow and impact the lives of so many individuals. Hope is what drives research, fuels Healthcare and inspires every person to become involved within this organization. I hope for a cure and a day that I will no longer need to dance, but until then I will work tirelessly to pursue a life in medicine and fuel the hope that I see within every miracle child’s face.</p>',
      'image'                 =>  'Drew'
    ),
    array(
      'name'                  =>  'Allison Stroop',
      'position'              =>  'Merchandise Overall',
      'email'                 =>  'astroop@floridadm.org',
      'previous_involvement'  =>  'Marketing Captain, Public Relations Captain',
      'major'                 =>  'Marketing',
      'minor'                 =>  '',
      'hometown'              =>  'Santa Rosa Beach, FL',
      'outside_involvement'   =>  'Panhellenic Council',
      'free_time'             =>  'I love to spend time with family and friends, travel anywhere and everywhere, and cook good food!',
      'fun_fact'              =>  'I am originally from a small town in Tennessee.',
      'favorite_memory'       =>  '<p>When I first met Ayden, one of our miracle children, I immediately was overwhelmed by his gracious and loving spirit. His zest for life and the people around his so inspiring. Ayden, myself and the rest of the PR team dance and sang to Blank Space together. That was such a special moment and I will always carry it with me. </p>',
      'motivation'            =>  '<p>The kids and their families. DM at UF is truly saving the lives of the kids at UF Health Shands Children’s Hospital. These families are fighting fights that are harder than I can imagine and being able to help them in their fight is my motivation. Finding Dance Marathon has led me to be a part of something so much bigger than myself and I am so grateful for to be a part it.</p>',
      'image'                 =>  'Stroop'
    ),
    array(
      'name'                  =>  'Torrie Scianna',
      'position'              =>  'Sponsorship Overall',
      'email'                 =>  'tscianna@floridadm.org',
      'previous_involvement'  =>  'Dancer Relations Staff, Two-year Marketing Captain',
      'major'                 =>  'Finance',
      'minor'                 =>  'Communications',
      'hometown'              =>  'Winter Park, FL',
      'outside_involvement'   =>  'Sigma Kappa Sorority',
      'free_time'             =>  'In my spare time I love to spend time with friends. You can usually find us exploring new trails and parks in Gainesville. If we&#39;re not hiking we&#39;re definitely relaxing in our ENO hammocks. If I&#39;m not outside, I&#39;m probably cooking, reading, or watching Netflix.',
      'fun_fact'              =>  'Most people have one row of eyelashes, but I have two!',
      'favorite_memory'       =>  '<p>My favorite DM memory was dancing on stage with Nick Mullen during the family talent show. Seeing how much we could really support these kids to live their dreams and give them the confidence they often lack due to their differences from other kids their age was amazing. When we got off stage he couldn&#39;t stop crying because he was so happy we performed with him and it was such a special moment. </p>',
      'motivation'            =>  '<p>Our amazing miracle children and families are what motivate me. Throughout my involvement with DM at UF I have built lasting relationships with them. They never let us forget how much our efforts and support mean to them and so many other families treated at UF Health Shands Children&#39;s Hospital. I am motivated to work even harder knowing we are giving these kids the childhood they deserve. </p>',
      'image'                 =>  'Torrie'
    ),
    array(
      'name'                  =>  'Arielle Darvin',
      'position'              =>  'Morale Overall ',
      'email'                 =>  'adarvin@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Morale Captain',
      'major'                 =>  'Communication Sciences and Disorders',
      'minor'                 =>  '',
      'hometown'              =>  'Melbourne, FL',
      'outside_involvement'   =>  'Camp Boggy Creek, Speech and Hearing Department Research Assistant, Danza Dance Company, Alpha Epsilon Phi Sorority',
      'free_time'             =>  'I love to dance, be silly with my friends, and laugh a lot. Oh, and I really like to eat.',
      'fun_fact'              =>  'I played the Velveeta cheese in my 3rd grade Chorus Musical called “The Cheese Stands Alone” (Another fun fact: I am a terrible singer!)',
      'favorite_memory'       =>  '<p>My favorite DM memory is watching everybody do last year’s linedance from start to finish for the first time, after we finished teaching it. The energy and positivity that filled the O’Dome was truly magical!</p>',
      'motivation'            =>  '<p>Last year, I attended a miracle child’s birthday party, where I played with Ayden for several hours. After endless trampoline jumping, running around the backyard, and Ayden’s fancy flipping, Ayden told me we were now best friends. I knew that I had been in the presence of a very special child – a child who inspired me to love more, to laugh more, and to appreciate life. We always say that Dance Marathon is “for the kids.” Our fundraising efforts make it possible for sick children at UF Health Shands to have access to top-notch medical equipment and for research to be conducted to find cures for pediatric illness. But, I really think that my love, passion, and motivation to be involved with this organization stems from the fact that Dance Marathon is not just “for the kids.” It is for us too – I am motivated by the positivity of the miracle children. I am captivated by the passion and determination of the DM captains and dancers who tirelessly fundraise. And, I am wholeheartedly motivated by the numbers we raised last year. I am certain that I talk about Dance Marathon too much, but I cannot help that my love and deep, unwavering passion for DM is apparent in everything I do.</p>',
      'image'                 =>  'Arielle'
    ),
    array(
      'name'                  =>  'Brad Wheeler',
      'position'              =>  'Operations Overall',
      'email'                 =>  'bwheeler@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Operations Captain',
      'major'                 =>  'Mechanical Engineering',
      'minor'                 =>  '',
      'hometown'              =>  'Tallahassee, FL',
      'outside_involvement'   =>  'Theta Chi Fraternity, Previous Chairman of Student Government Productions',
      'free_time'             =>  'I coach youth travel lacrosse in my free time. I also enjoy woodworking, gardening, and hunting.',
      'fun_fact'              =>  'I am a proud owner of a hedgehog named Spud.',
      'favorite_memory'       =>  '<p>Last year, the cotton candy machine in the family room needed fixing. So I was able to repair the machine and begin serving cotton candy to all the Miracle Children. Seeing the smiles on their faces as they covered themselves with cotton candy was awesome.</p>',
      'motivation'            =>  '<p>What motivates me is seeing how much Dance Marathon and Children&#39;s Miracle Network does for the Miracle Children and their families by supplying them with not only the best doctors, but with smiles on their faces and beds to sleep on at night.</p>',
      'image'                 =>  'Brad'
    ),
    array(
      'name'                  =>  'Armani Abreu',
      'position'              =>  'Public Relations Overall',
      'email'                 =>  'aabreu@floridadm.org',
      'previous_involvement'  =>  'Public Relations Captain',
      'major'                 =>  'Political Science',
      'minor'                 =>  'Spanish and Mass Communications',
      'hometown'              =>  'Miami, FL',
      'outside_involvement'   =>  'Executive Vice President of the Interfraternity Council, Executive at Large for Florida Blue Key, Delta Chi Fraternity',
      'free_time'             =>  'In my free time I enjoy playing sports, going out with my friends and watching Netflix. I am also an avid coffee drinker.',
      'fun_fact'              =>  'I am tri-lingual, fluent in English, Spanish and French.',
      'favorite_memory'       =>  '<p>My favorite DM memory would have to be spending time with Ayden the miracle child this past year and during the event. Although he cannot see, he remembered my voice from our previous interactions and that was truly heartwarming. Seeing him and the happiness he exudes made me love being involved in DM even more than I already did.</p>',
      'motivation'            =>  '<p>I am motivated to be involved with DM because of the impact it has on the lives of so many children. The miracle children live life in such a positive manner and seeing them not take anything fro granted keeps me grounded and wanting to make even more of a difference. Seeing these families and how appreciative they are of the work we do makes it worth while!</p>',
      'image'                 =>  'Armani'
    ),
    array(
      'name'                  =>  'Grace Caswell',
      'position'              =>  'Recruitment Overall',
      'email'                 =>  'gcaswell@floridadm.org',
      'previous_involvement'  =>  'Recruitment Captain',
      'major'                 =>  'Health Education and Human Behavior',
      'minor'                 =>  '',
      'hometown'              =>  'Atlanta, Georgia',
      'outside_involvement'   =>  'Chi Omega Sorority, UF Health Volunteer',
      'free_time'             =>  'I love to spend time with family, especially at the lake or on the water, travel anywhere and everywhere, eat, dance, sing, and hang out with friends',
      'fun_fact'              =>  'I can&#39;t do a cartwheel',
      'favorite_memory'       =>  '<p>After working tirelessly for months as captains, the Recruitment team clutched hands together at the end of the event this past year. Throughout the year we had grown closer and closer, and in that moment came together as a family. As the numbers slowly rose into the air, I could not control my tears when I saw the number 2, symbolizing that we had raised over two million dollars For The Kids. Our own little close-knit family stood right behind the families and kids we had come together to help support. In that moment, I truly experienced what it was like to be apart of something bigger than myself, and such a humbling experience really is life-changing.</p>',
      'motivation'            =>  '<p>Dance Marathon gives me new inspiration and passion every single day. It is hard to put into words the bravery and resilience of not only our miracle children, but also their siblings, parents, family and friends. Their joy can light up any room, or brighten anyone&#39;s day. I want to be able to give as much of that joy and inspiration back to them. These kids have made such an impact on my life, that I want to be able of making miracles in theirs. </p>',
      'image'                 =>  'Grace'
    ),
    array(
      'name'                  =>  'Kevin Kimbrough',
      'position'              =>  'Creative Development Overall',
      'email'                 =>  'kkimbrough@floridadm.org',
      'previous_involvement'  =>  'Technology Captain',
      'major'                 =>  'Computer Science',
      'minor'                 =>  'Business Administration',
      'hometown'              =>  'Clearwater Beach, FL',
      'outside_involvement'   =>  'Delta Tau Delta Fraternity',
      'free_time'             =>  'I spend my free time enjoying anything art related. Music, Movies, TV Shows, Video Games, Books, Theatre, Paintings, you name it. I also love traveling and the outdoors. I love hiking whenever I find myself somewhere with mountains and beautiful views.',
      'fun_fact'              =>  'My immediate family members and I were all born in different states',
      'favorite_memory'       =>  '<p>I remember walking into the O&#39;Dome the night before the first Dance Marathon I would participate in. There were hundreds of people getting everything set up, and I was taken aback by how united everyone was. Everywhere I looked people were working to make Dance Marathon an amazing event for the kids. All of the year&#39;s hard work culminates into this big event, and everyone was on board to get the work done. I was extremely grateful to be a part of such a great community. The next day when the event started, seeing each child&#39;s beaming face as they walked in made all the work worth it.</p>',
      'motivation'            =>  '<p>When I first met Tyler Pence, a miracle child, I was humbled. As I sat at dinner with him talking about what video games he liked, I remembered myself at his age. He and I would probably have been school friends had we met at the same age. Thanks to Shands Hospital and Children&#39;s Miracle Network, Tyler has been able to have a good childhood, which I had always taken for granted. His family was given hope by the work that was done. Seeing the hope that is given motivates me in my work with Dance Marathon.</p>',
      'image'                 =>  'Kevin'
    )
  );
?>

<div class="page-heading parallax meet-the-overalls">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Meet The Overalls</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
            <li><a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=786" target="_blank">Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams" >Captain Teams</a></li>
						<li><a class="active">Meet the Overalls</a></li>
<!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <?php
        for($i = 0; $i < count($overalls); $i++) {
          if($i % 3 == 0) {
            echo '<div class="row">';
          } ?>
          <div class="col-sm-4">
            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
              <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/overalls/'.$overalls[$i]['image']); ?>.jpg" alt="..."><br>
              <h3><?php echo $overalls[$i]['name']; ?></h3>
            </a>
            <p style="text-align: center;">
              <em><?php echo $overalls[$i]['position']; ?></em>
              <br><a href="mailto:<?php echo $overalls[$i]['email']; ?>"><?php echo $overalls[$i]['email']; ?></a>
            </p>
          </div>

          <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $overalls[$i]['name']; ?></h4>
                </div>
                <div class="modal-body">
                  <h4>Previous DM Involvement</h4>
                  <p><?php echo $overalls[$i]['previous_involvement']; ?></p>

                  <?php if($overalls[$i]['grad']){ ?>
                  <h4>Graduate</h4>
                  <p><?php echo $overalls[$i]['grad']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['undergrad']){ ?>
                  <h4>Undergrad</h4>
                  <p><?php echo $overalls[$i]['undergrad']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['major']){ ?>
                  <h4>Major</h4>
                  <p><?php echo $overalls[$i]['major']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['minor'] !== "" && $overalls[$i]['minor']){ ?>
                  <h4>Minor</h4>
                  <p><?php echo $overalls[$i]['minor']; ?></p>
                  <?php } ?>

                  <h4>Hometown</h4>
                  <p><?php echo $overalls[$i]['hometown']; ?></p>

                  <h4>Outside Involvement</h4>
                  <p><?php echo $overalls[$i]['outside_involvement']; ?></p>

                  <h4>In My Free Time...</h4>
                  <p><?php echo $overalls[$i]['free_time']; ?></p>

                  <h4>Fun Fact</h4>
                  <p><?php echo $overalls[$i]['fun_fact']; ?></p>

                  <h4>Favorite DM Memory</h4>
                  <?php echo $overalls[$i]['favorite_memory']; ?>

                  <h4>What Motivates You?</h4>
                  <?php echo $overalls[$i]['motivation']; ?>
                </div>
              </div>
            </div>
          </div>
        <?php
          if(($i - 2) % 3 == 0) {
            echo '</div>';
          }
        } ?>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
