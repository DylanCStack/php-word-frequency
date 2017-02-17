#Word Search
###Authored by Dylan Stackhouse, 2/17/17.
##Description
A website through which the user inputs two strings, one to search through, and one to search for. The website will return to the user how many iterations of their search string was found in their second input.
#Setup

##Specifications
1. The program will return if a given character appears in a string:
    * Input: "c":"catastrophe"
    * Output: 1
    Inputs chosen to match exactly once so as not to break after later code refactoring.

2. The program will return how many times a character appears in a given string.
    * Input: "n":"concatenation"
    * Output: 3
    Inputs chosen to specifically match multiple times to show functionality.

2. The program will return if a given sequence of characters appears in a string.
    * Input: "lucky":"You feelin' lucky, punk?"
    * Output: 1
    Inputs chosen to match exactly once so as not to break after later code refactoring.

3. The program will return how many times a given sequence of characters appear in a string.
    * Input: "wasted": "Almost nothing was more annoying than having our wasted time wasted on something not worth wasting it on."
        * Example found online, quote from "Then We Came to the End" by Joshua Ferris.
    * Output: 2
    Inputs chosen to specifically match multiple times to show functionality.
4. The program will allow the user to select to search for partial matches or full words only.
    * Input: "word":"word word wordy wordy words. word."
    * Output: 3
    Inputs choses to show that partial matches will not be detected.
