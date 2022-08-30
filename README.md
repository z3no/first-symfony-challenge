# Symfony MVC
BeCode Learning Challenge

***

The so called bully of our school has finally arrived, SYMFONY!

Let's check this big bully out! Get to know him/her/it/... explore the kind side everyone has.
The [documentation](https://symfony.com/doc/current/index.html) will reveal all!

### Our learning objectives for the day are:
***
- Installing Symfony
- Learn about the lifecycle of software
- Learn to use the MVC layer of Symfony
- Learn to use the routing component
- Learn the basics of twig 🌿

## Get across the hall without the Hallway Monitor catching us a.k.a. The mission
***

### Phase 1: Get Symfony on my side
To show my newly wild hearted friend that I mean well, we first have to get to know eachother.
I have to show him my Mac, make him see I want to share my stuff with him. Allow him to install, get comfortable.

Luckily for my new bud and I this all went very well using his CLI and with a little help from another classmate called `Homebrew`.
The three of us together just ran `brew install symfony-cli/tap/symfony-cli` and this made us able to get our gang up and running by
creating our first project together. To do this we had to run `symfony new --webapp my_first_symfony_project` the naming was still pretty dry
but hey, life. We decided to keep it traditional for our mission that's why we include `--webapp`.

### Phase 2: Use the pattern (MVC)
When we open the door from the classroom and look into the abyss of the infinite long hallway, hear the echo,...
Symfony finds a small piece of paper lying in front of the door. It says use the pattern, and for some reason it has a clickable link.
That's nice. [Click](https://github.com/becodeorg/ANT-Lamarr-6.35/tree/main/2.The-Hill/php/7.oop-pricecalculator) and we find some
nice theory from an older exercise we can use to get across the hallway.

Luckily [my new buddy](https://symfony.com/doc/current/controller.html) also knows a lot. We will need this crucial information to make it.
So first let's derive from our path, and prepare ourselves. We did this by getting our [lucky number](https://symfony.com/doc/current/page_creation.html).
This prep will help us get across this hallway! Now let's create our own `Controller` and enter this long scary hallway without a hall-pass.

- TO DO:
    - [x] create a controller called: `LearningController`, we can use the command `bin/console make:controller`.
    - [x] create a method called `aboutMe`. This page should contain some text and no further functionality.
    - [x] the page should be reachable by adding `/about-me` to the url
    - [x] use Twig 🌿

### Phase 3: Learn how to sneak, become invisible like Snake from Metal Gear Solid
We need some functional stuff to get across the hallway unseen.

-TO DO:
  - [ ] add 2 actions to the controller
    - `showMyName` (homepage): add a name tag to our shirts just to make it more spicy. The default name is "Unknown". 
       Below our tag there should be a form, weird right, where I can save my name. When submitted (POST) this should change to `changeMyName`. We will need to change the `<form action="">` to the route of the `changeMyName()` method, check below.
       This page should be the homepage. If you just enter the domain name this should be the page that opens up. We will need a twig file for the view.
    - `changeMyName`: You should not be able to go to this URL if the method is not a POST request. Find a way with Symfony to enforce this.
       If the user arrives here from the change your name form, save his choice in a $_SESSION variable. After the form is saved,
      [redirect](https://symfony.com/doc/current/controller.html#redirecting) the user to the `showMyName` action. This should change the URL.
      This method does not require a view, because it immediately redirects the user to the previous page.
  - The FLOW -> GET showMyName() (homepage) -> POST to changeMyName() -> SET SESSION variable -> Redirect to -> GET showMyName()

### Phase 4:

### Phase 5:

### Phase 6:
