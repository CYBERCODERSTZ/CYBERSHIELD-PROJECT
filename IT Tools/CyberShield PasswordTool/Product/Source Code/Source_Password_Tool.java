import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyEvent;
import java.util.regex.Matcher;
import java.util.regex.Pattern;
import java.awt.datatransfer.Clipboard;
import java.awt.datatransfer.StringSelection;
import java.security.SecureRandom;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Enumeration;

public class CombinedPasswordTool extends JFrame {

    final String version ="V 1.0";
    public static String generatedKey="";
    private CirclePanel colorPanel;
    private JTabbedPane tabbedPane;
    private static final String UPPER_CASE = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    private static final String LOWER_CASE = "abcdefghijklmnopqrstuvwxyz";
    private static final String NUMBERS = "0123456789";
    private static final String SYMBOLS = "!@#$%^&*()-_=+[]{}|;:'\",.<>/?";

    public CombinedPasswordTool() {

        setTitle("CYBERSHIELD - Password Tool   ( "+version+" )");
        setSize(700, 450);
        setMinimumSize(new Dimension(700, 450));
        setMaximumSize(new Dimension(900, 500));
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        colorPanel = new CirclePanel(Color.WHITE);

        tabbedPane = new JTabbedPane();
        tabbedPane.addTab(" Password Strength Test ", createTestPanel());
        tabbedPane.addTab(" Password Generator ", createGeneratorPanel());
        scaleUpText(tabbedPane, 1.5);
        add(tabbedPane);

        setLocationRelativeTo(null);
        setVisible(true);
    }



    private static void scaleUpText(Component component, double scaleFactor ){
        if(component instanceof Container){
            Component[] components = ((Container) component).getComponents();
            for (Component child : components) {
                scaleUpText(child, scaleFactor);
            }
        } else if (component instanceof JComponent){
            if (component instanceof AbstractButton || component instanceof JLabel){
                Font currentFont = ((JComponent) component).getFont();
                if (currentFont != null ) {
                    Font newFont = currentFont.deriveFont((float) (currentFont.getSize() * scaleFactor));
                    ((JComponent) component).setFont(newFont);
                }
            }
        }


    }



    private JPanel createTestPanel() {
        JPanel panel = new JPanel(new GridLayout(7, 2, 10, 10));
        panel.setBorder(BorderFactory.createEmptyBorder(20, 20, 20, 20));

        JLabel passwordLabel = new JLabel("Enter Password to Test:");
        JPasswordField passwordField = new JPasswordField();
        JCheckBox checkbox = new JCheckBox("Show Password");
        JButton testButton = new JButton("Run Test");
        JLabel resultLabel = new JLabel();
        JLabel messageLabel = new JLabel();
        JButton copyButton = new JButton("Copy to Clipboard");

        copyButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Copy logic for test panel
                String textToCopy = new String(passwordField.getPassword());
                if (textToCopy.length() < 1) {
                    JOptionPane.showMessageDialog(panel, "Nothing to copy - First enter password to test");
                    return;
                }

                StringSelection stringSelection = new StringSelection(textToCopy);
                Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard();
                clipboard.setContents(stringSelection, null);

                JOptionPane.showMessageDialog(panel, "Password copied to clipboard");
            }
        });

        checkbox.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                if (checkbox.isSelected()) passwordField.setEchoChar((char) 0);
                else passwordField.setEchoChar((char) '\u2022');
            }
        });

        testButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String password = new String(passwordField.getPassword());
                int strengthScore = testAdvancedStrength(password);
                displayResult(resultLabel, messageLabel, strengthScore);
                colorPanel.setColor(getStrengthColor(strengthScore));
            }
        });

        panel.add(passwordLabel);
        panel.add(passwordField);
        panel.add(checkbox);
        panel.add(testButton);
        panel.add(resultLabel);
        panel.add(colorPanel);
        panel.add(messageLabel);
        panel.add(copyButton);

        return panel;
    }


    private Color getStrengthColor(int strengthScore) {
       Color[] colours = new Color[5];

       colours[0] = Color.RED;
       //colours[1] = Color.ORANGE;
       colours[1] = Color.YELLOW;
       colours[2] = new Color(192,255,20); //yellow-green
       colours[3] = Color.GREEN;

        return colours[ (int) (((float)strengthScore)/90*4) ];
    }



//....................................................................................................................
    
    private JPanel createGeneratorPanel() {
        JPanel panel = new JPanel(new GridLayout(5, 2, 10, 10));
        panel.setBorder(BorderFactory.createEmptyBorder(20, 20, 20, 20));

        JLabel baseLabel = new JLabel("Base String:");
        JTextField baseTextField = new JTextField();
        baseTextField.setToolTipText("Enter base string");

        JLabel customLabel = new JLabel("Customize Character Pool?");
        JCheckBox customizeCheckBox = new JCheckBox();
        JButton copyButton = new JButton("Copy to Clipboard");
        

        copyButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                // Copy logic for test panel
                String textToCopy = new String(CombinedPasswordTool.generatedKey);
                if (textToCopy.length() < 1) {
                    JOptionPane.showMessageDialog(panel, "Nothing to copy - First generate a password");
                    return;
                }

                StringSelection stringSelection = new StringSelection(textToCopy);
                Clipboard clipboard = Toolkit.getDefaultToolkit().getSystemClipboard();
                clipboard.setContents(stringSelection, null);

                JOptionPane.showMessageDialog(panel, "Generated Password copied to clipboard");
            }
        });


        JButton generateButton = new JButton("Generate Password");
        JTextArea resultTextArea = new JTextArea();
        resultTextArea.setEditable(false);

        generateButton.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                String baseString = baseTextField.getText();
                String characterPool = customizeCheckBox.isSelected() ? customizeCharacterPool() : getDefaultCharacterPool();
                String generatedPassword = generatePassword(baseString, characterPool);
                resultTextArea.setText(" Generated Password:   " + generatedPassword);
                CombinedPasswordTool.generatedKey = generatedPassword;
            }
        });

        panel.add(baseLabel);
        panel.add(baseTextField);
        panel.add(customLabel);
        panel.add(customizeCheckBox);
        panel.add(generateButton);
        panel.add(new JLabel()); // Empty label for spacing
        panel.add(resultTextArea);
        panel.add(new JLabel()); // Empty label for spacing
        panel.add(copyButton);

        return panel;
    }
    

    private String generatePassword(String baseString, String characterPool) {
        List<Character> passwordCharacters = new ArrayList<>();
        SecureRandom random = new SecureRandom();

        for (char c : baseString.toCharArray()) {
            passwordCharacters.add(c);
        }

        for (int i = baseString.length(); i < 16; i++) {
            passwordCharacters.add(characterPool.charAt(random.nextInt(characterPool.length())));
        }

        Collections.shuffle(passwordCharacters, random);

        StringBuilder generatedPassword = new StringBuilder();
        for (Character character : passwordCharacters) {
            generatedPassword.append(character);
        }

        return generatedPassword.toString();
    }

    private String customizeCharacterPool() {
        StringBuilder customPool = new StringBuilder();

        JCheckBox upperCaseCheckBox = new JCheckBox("Include Uppercase Letters");
        JCheckBox lowerCaseCheckBox = new JCheckBox("Include Lowercase Letters");
        JCheckBox numbersCheckBox = new JCheckBox("Include Numbers");
        JCheckBox symbolsCheckBox = new JCheckBox("Include Symbols");

        Object[] message = {
                upperCaseCheckBox,
                lowerCaseCheckBox,
                numbersCheckBox,
                symbolsCheckBox
        };

        int option = JOptionPane.showConfirmDialog(null, message, "Customize Character Pool", JOptionPane.OK_CANCEL_OPTION);

        if (option == JOptionPane.OK_OPTION) {
            if (upperCaseCheckBox.isSelected()) {
                customPool.append(UPPER_CASE);
            }
            if (lowerCaseCheckBox.isSelected()) {
                customPool.append(LOWER_CASE);
            }
            if (numbersCheckBox.isSelected()) {
                customPool.append(NUMBERS);
            }
            if (symbolsCheckBox.isSelected()) {
                customPool.append(SYMBOLS);
            }
        }

        return customPool.toString();
    }

    private String getDefaultCharacterPool() {
        return UPPER_CASE + LOWER_CASE + NUMBERS + SYMBOLS;
    }

     //  Password Testing Method .................................................................................
     public static int testAdvancedStrength(String password) {
        int lengthScore = testLengthStrength(password);
        int characterDiversityScore = testCharacterDiversityStrength(password);
        int patternRecognitionScore = testPatternRecognitionStrength(password);
        int keyboardPatternScore = testKeyboardPatternStrength(password);
        int specialCharacterScore = testSpecialCharacterStrength(password);
        int digitScore = testDigitStrength(password);
        int upperCaseScore = testUpperCaseStrength(password);
        int lowerCaseScore = testLowerCaseStrength(password);
        int consecutiveCharactersScore = testConsecutiveCharactersStrength(password);
        int dictionaryWordScore = testDictionaryWordStrength(password);

    // Combine scores using weighted averages or any other desired algorithm
        int totalScore = 6*lengthScore + 2 * characterDiversityScore + 3 * patternRecognitionScore +
                2 * keyboardPatternScore + 3 * specialCharacterScore + digitScore +
                upperCaseScore + lowerCaseScore + consecutiveCharactersScore +
                dictionaryWordScore;

    //Enforce any other critical password policies
                int finalScore = totalScore;
              finalScore = (int)( (lengthScore < 8) ? totalScore * .8 : finalScore*2);
              finalScore = (int)( (lengthScore < 4) ? totalScore * .5 : finalScore);
              finalScore = (int)( (lengthScore < 3) ? totalScore * .15 : finalScore);

      
        return (finalScore);

    }

    // Method 1: Length-based scoring
    public static int testLengthStrength(String password) {
        return Math.min(password.length(), 5);
    }

    // Method 2: Character diversity scoring
    public static int testCharacterDiversityStrength(String password) {
        int distinctChars = (int) password.chars().distinct().count();
        return Math.min(distinctChars, 5);
    }

    // Method 3: Pattern recognition scoring
    public static int testPatternRecognitionStrength(String password) {
        // Check for common patterns like "123", "abc", etc.
        if (Pattern.compile("\\d{3}").matcher(password).find() ||
                Pattern.compile("[a-zA-Z]{3}").matcher(password).find()) {
            return 0;
        }
        return 5;
    }

    // Method 4: Keyboard pattern scoring
    public static int testKeyboardPatternStrength(String password) {
        // Check for common keyboard patterns like "qwerty", "123456", etc.
        if (Pattern.compile("(?i)qwerty|123456|password").matcher(password).find()) {
            return 0;
        }
        return 5;
    }

    // Method 5: Special character inclusion scoring
    public static int testSpecialCharacterStrength(String password) {
        // Check if the password contains at least one special character
        if (Pattern.compile("[!@#$%^&*()-_=+\\[\\]{}|;:'\",.<>/?]").matcher(password).find()) {
            return 5;
        }
        return 0;
    }

    // Method 6
    private static int testDigitStrength(String password) {
        return password.chars().anyMatch(Character::isDigit) ? 5 : 0;
    }

    // Method 7
    private static int testUpperCaseStrength(String password) {
        return password.chars().anyMatch(Character::isUpperCase) ? 5 : 0;
    }

    // Method 8
    private static int testLowerCaseStrength(String password) {
        return password.chars().anyMatch(Character::isLowerCase) ? 5 : 0;
    }

    // Method 9
    private static int testConsecutiveCharactersStrength(String password) {
        // Check for consecutive characters, e.g., "abc", "123", etc.
        if (Pattern.compile("(?i)abcdefghijklmnopqrstuvwxyz|0123456789").matcher(password).find()) {
            return 0;
        }
        return 5;
    }

    // Method 10
    private static int testDictionaryWordStrength(String password) {
        // Check if the password contains any common dictionary words
        if (Pattern.compile("(?i)password|admin|letmein").matcher(password).find()) {
            return 0;
        }
        return 5;
    } 

    private void displayResult(JLabel resultLabel, JLabel messageLabel,int strengthScore) {
        String resultMessage;
        if (strengthScore >= 60) {
            resultMessage = "Strong Password";
        } else if (strengthScore >= 40) {
            resultMessage = "Moderate Password";
        } else {
            resultMessage = "Weak Password - Please consider a stronger one.";
        }

         //resultLabel.setText("strength score : "+strengthScore); //display strength score
          messageLabel.setText(resultMessage);

    }

    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> new CombinedPasswordTool());
    }

class CirclePanel extends JPanel {

    private Color circleColor;

    public CirclePanel(Color initialColor) {
        circleColor = initialColor;
    }

    public void setColor(Color newColor) {
        circleColor = newColor;
        repaint(); // Trigger repaint to update the color
    }

    @Override
    protected void paintComponent(Graphics g) {
        super.paintComponent(g);

        // Draw a small circle with the current color
        int diameter = Math.min(getWidth(), getHeight()) - 20; // Limit diameter to panel size
        int x = (getWidth() - diameter) / 2;
        int y = (getHeight() - diameter) / 2;

        g.setColor(circleColor);
        g.fillOval(x, y, diameter, diameter);
    }
}


}