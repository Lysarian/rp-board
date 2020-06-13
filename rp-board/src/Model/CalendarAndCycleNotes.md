# Notes regarding calendars and cycles, for generation.

1. Cycles
   - General
   - Types
   - Cycle of cycles

***

## Cycles

A. General : why cycles ?

Cycles are the basis of the entire calendar and calendar generation system. The original question was "What is a calendar, what is a calendar's basest unit, and how exactly cans this nature and base unit be transcribed as a simple, mathematical and algorithmic data that can be used to  generate potentialy very complex calendars that are based on chaotic systems and values generation. 
The answer was that as far as you go, the passage of time as we use it for everyday life and in non scientific ways is always a cycle. Minutes are cycles of seconds, hours are cycles of minutes, days are cycles of hours etc... But beyond these divisions, thing can get complicated very quickly. Consider 4 calendars : Gregorian, Julian, Hijri, and Chineese. 

Comparing these sums up most of the issues with the creation of calendars (though not all of them). 
    
In the gregorian calendar, days are in a cycle of 7 called weeks, but months are not a cycle of weeks : they're a cycle of days with a pattern : 31 - 28/29 - 31 - 30 - 31 - 30 - 31 - 31 - 30 - 31 - 30 - 31. Years are a cycle of twelve months, and as the pattern indicates, there is a month which number of days alternates (February with an alternative number of days ever 4 years). Beyond years : everything is held up together on a decimal basis : decades, centuries, millenias. There are several things to note on this calendar before heading to the Julian calendar : it doesn't account for seasons, astronomical events like solstices, equinox, moon phase etc... have no influence on the beginning of the year, of a month or week. The date of beginning itslef is arbitrary since in and on itself, it is not based upon any celestial/astonomical event. It ends after the end of the cycle of months, that has been made to correspond to an almost full revolution of the Earth around the Sun though. 
    
The Julian Calendar is much like the gregorian one, except it's organisation revolves around the the old Roman Republican calendar (of which it is a reform), and the fact that Christianity later reformed part of it. As such, days are organised around three major dates (Kalends, Nones, Ides), which place in the months can vary for the to latter, respectively the 7th or 5th day and the 14th or 13th day of the months. The name of each day changes accordingly and again, the year is a succession of 12 months with the number of days in february varying. The fun begins when you consider that this is a Solar calendar, since it is based upon the Earth's revolution cycle around the Sun, and that when christian adopted this calendar later, they changed the date at which the year began, and that the religious computed calendar started with Easter, which date depends upon the moon and it's cycles, making it possible for a year to have two months of march and, in extreme cases, April too. 
    
The Hijiri Lunar calendar (since there also exists a Hijiri Solar Calendar), is used as the religious calendar for Islam, and Islamic countries. As it's name quite plainly indicates, it is a lunar calendar, in which each of the 12 month start with a new lunar cycle, which can make for very uneven year lengths although shorter than Gregorian or Julian years, while each week lasts 7 days no matter what. This creates a very distinct calendar from the first two. 
    
Finally, there is the Traditional Chineese Calendar which is Lunisolar. Long story short : within the calendar there is the solar year comprised of 24 cycles based upon astronomical events with the Winter Solstice being one of the most important events of this calendar - but leading to an uneven length of this cycle, months are defined by new moons, weeks are seven days in length but sometimes ten for specific events, new year begins at a date generally comprised between 21st January and 20th February and coresponds to both a new moon and the start of a new season of spring and therefore, a new Solar Year, there are leap years with a thirteenth month that can have up to 30 days to avoid important drifts in the calendar, and there are a lot of different versions of this calendar, mostly by country, which makes it all the more confusing since the observation of astronomical events related to the calendar varies depending on longitude, latitude, possibly altitude, etc... Also, years are rouded up in 60 years length cycles.

So why such a long and possibly confusing explanation ? Because despite their many differences all of these calendars can be summed up as a series of different cycles. These cycles are of different types, length, and do not necessarily interact with each other, some are based upon others, some include random/chaotic values but in the end they are just cycles and series of cycles.

B. Types 

First let's add context : I  want to create for the sake of some RP, a civilization whose 26 months are precissely 20 days long, where months are grouped within a custom time unit called Bunnyiad that corresponds to the time that the two suns are perfectly aligned above the gigantic temple of the Baby Bunny God, and where the year that cares nothing for the positions of the two suns, has it's length determined by the fourth appearance of the three moons of the planet at a full phase at the same time within the sky, at which point the Ancient of R'lyeh decide to sacrifice two young virgin men upon the altar of the Great Hentai Monster, leave them for the crow, make two twenty-sided dices with their bones and throw them to decide how many more days will still pass before the begining of next year, and should the result be 2 or 40, whether a new Age dedicated to another Bunny Deity will begin or not. Meanwhile, we have Doggos which have an alternative length of 3, 5, and 5 + a dice throw length in days.  

First 'rule' : the actual length values and possible problems associated will only be considered in a second time. For now, let's just asume that all cycles have a length that is compatible. We can already distinguish here all of our main 'metatypes' of cycles. 

We have **fixed duration cycles** : a cycle of 26 months, important not for the calendar itself but the nomenclature attached to it. Without this cycle, you don't know when to reset the name of the months. This also comprises months which have a length of 20 days.

Also : we have the Doggos, which are **alternate duration cycles** : their length alternate in a specific order (aka a **pattern**), *fixed duration* 3 days, *fixed duration* 5 days, and *fixed duration plus random duration* 5 days + a number from 1 to 6 days so between 6 and 11 days. 

So spoilers, there also is a **random duration cycles**. This would correspond to the length of an Age, whose sole value is determined by the chaotic value given by the two dices thrown at the end of each year, with a theoretical probability of 1/200. 

Then we have cycles that will be named throughout the app as **occurence cycles**. These are the Bynnyiad. Each time our two sun cycles intersect in a specific way, a new Bunnyiad *occurence cycle* begins and ends the precedent. 

And there comes the headache : **these cycles can be combined**. The third Doggos is a *fixed duration plus random duration of value comprised between 1 and 6* cycle, but it's not the only one. Our years are technically an *occurence cycle with a pattern of value 4 combined with a random cycle of value comprised between 2 and 40* : the fourth occurence is the milestone that trigers the determination of a chaotic cycle (throwing dices) that gives the value to add in days. We could also modify it so that this value equals 2 to forty Doggos, so that the random cycle would be based not upon day units but on another cycle. Headeache right ? 

Not to push it even further, let's pass to the second part and talk length values and user. It is theoretically possible, with some values like 11 and 28, that the time between two *occurence cycles* is pretty extraordinayr, especially if you take into account that the movement of stellar bodies like moons is rarely a round number. You can end up with random cycles determining your two occurence cycles that make it terribly difficult to create a small enough pattern for this to be relevant. Unfortunately, there is no fix to that, except changing the original values. Mathematics will be mathematics, so changing the origin values is the only way to create a system that works. To quote Einstein and completely change the true meaning of his sentence : 
> If the theory don't fit the facts, change the facts. 

That means any system must include **clear** and **precise** warnings and infos for the user, to make certain he doesn't create years lasting billions of days without expressedly wishing it, tips on how to correct potential long cycles mistakes and explanations on why such cycles occur (basically : his fault. Mathematics are innocent and lovely). 

    Here is the list of all types with notes corresponding to. You'll remark that some of the things said before will slightly varry, since this is the easyest way found to create it.

    -Fixed [Days per months (20) and months cycle (26), plus the first and second Doggos (3 and 5 days)]
    -Random [Third Doggos, between 6 and 11 days, each moon and sun, end year dice throw]
    -Alternate Fixed
    -Alternate Random
    -Occurence [Bunnyiad]
    -Occurence Fixed
    -Occurence Random 

As you may notice their are some elements missions, like the year, the cycle composed of three Doggos or the Age creation. That's normal. They are cycle of cycles.

C. Cycle of cycles

Let's head back to the Gregorian Calendar. We said before that a year is composed of either 365 or 366 days, depending whether there are 28 or 29 days in february. This would actualy translate like this in terms of cycles as defined here. 

    Days
    Alias A - Month Cycle 31 = Fixed, 31 days
    Alias B - Month Cycle 30 = Fixed, 30 days
    Alias C - Month Cycle February = Alternate Fixed, 28 days, 29 days, pattern 4, year cycle.

    Then you have to create your year cycle. It will be the subsequent cycle of cycles : 

    Succession of cycle = true - Fixed - A C A B A B A A B A B A

This means that a year will be defined by the successions of month cycles A B C in this fixed order. The question of how exactly the system knows which year is a leap year is an entierly different topic adressed later. 

If we head back to our Bunny Worshiping Lovecraftian Civilization, a year will be the folowing succession of cycles

    Alias A - Three Moons Year Cycle = Occurence Fixed, intersect 3 full moons, loop 3

    Alias B - End Year Throw = Random, min 2, max 40

    Year Cycle : Succession of cycle = true - Fixed - A B

Meaning that we have our cycle, corresponding to the three moons appearing three times at full phases in the sky, on the same date, that we can put inside a single cycle since we don't use it anywhere else, with a loop of value three indicating that a new cycle needs for the event to happen three times before resetting. 
Then, a year cycle is only the fixed combination of this, and the end year dice throw by the ancients which is a random value between 2 and 40.

But now, what of our Age variable, still on the roadside for now. Well it's as simple as a basic programation condition.

    Alias A - End Year Throw = Random, min 2, max 40

    Age Cycle, Succession of cycle = true, Occurence, A, When A's length = 2 or 40.

Know that's the theory behind it all, that is transcripted into the code later on. 