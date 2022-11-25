This application was created using the following requirements:


Intro
A new domestic airline in Canada has asked you to build a basic online booking system.


Information
1. The airline has a fleet of 3 planes. Each plane can carry 144 passengers, including a
crew of 12.
2. The airline currently has a hub at Toronto Pearson, and flies to the following cities:
a. Edmonton
b. Calgary
c. Vancouver
d. Halifax
e. Whitehorse


Requirements
1. Build a basic booking page where users can select their travel dates. Assume that each
booking must be a round trip.
a. Things to consider:
i. The same flight cannot take more people than the plane’s capacity
ii. The same plane can only be used for one route at a time (e.g. it cannot
be flying to two different cities at the same time)
iii. You will need to seed in available dates and plan this out accordingly.
Typically this would be done through an admin panel where flights can be
added, but since there is no admin panel, you will need to do this yourself
2. Tickets for flights are all-inclusive (no extra charges for carry-ons, and only one travel
class: economy).
a. This is done for simplicity’s sake so you don’t spend too much time on this
project, but think about the future that if the requirements change and you now
need to add a business class, how will this change?
3. Each ticket has a baseline cost, and the price increases by X% of the base price as the
dates get closer to the travel date.
a. For example, someone booking a month before their travel date will get a
cheaper ticket than if they booked the night before.
4. For simplicity’s sake, users can only make a booking for one traveler at a time.
5. After the user has confirmed their booking, they need to make a payment. The airline
has partnered up with Stripe for Credit Card processing.
a. You will need to make a test Stripe account
b. You will need to use Laravel Cashier
c. You can use the simple Stripe Checkout flow (so users are redirected to Stripe’s
page to pay, and then redirected back)
6. Once a user has completed their payment, they are returned back to your app (from
Stripe), and you need to give them a confirmation number, and send them an email
confirming that their booking is complete.
7. For simplicity’s sake, there is no login system required, but users can see their basic
booking details by providing their booking reference ID and their last name.
a. Hint: use a separate database column to store a booking reference ID, and don’t
just use the primary ID of the tabl
