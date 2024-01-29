<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\VirusFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        // \App\Models\User::factory(10)->create();

        $virusName = ['Trojan Horse', 'Worm', 'Ransomware', 'Spyware', 'Adware', 'Rootkit', 'Keylogger', 'Botnet', 'Browser Hijacker', 'Fileless Malware', 'Mobile Malware', 'Mac Malware', 'Linux Malware', 'Memory Resident Viruses', 'Macro Viruses'];
        $virusType = ['Trojan', 'Worm', 'Ransomware', 'Spyware', 'Adware', 'Rootkit', 'Keylogger', 'Botnet', 'Browser Hijacker', ' Fileless Malware', 'Various (Trojans, ransomware, etc.)', 'Various (Trojans, adware, etc.)', 'Various (Worms, rootkits, etc.)', 'Memory Resident Virus', 'Macro Virus'];
        $virusDangerLevel = ['Moderate to High', 'Moderate to High', 'High', 'Moderate', 'Low to Moderate', 'High', 'Moderate to High', 'High', 'Low to Moderate', 'High', 'Moderate to High', 'Low to Moderate', 'Low to Moderate', 'Moderate', 'Low to Moderate'];
        $virusAffectedPlatform = ['All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'All major operating systems', 'Android, iOS.', 'macOS.', 'Linux', 'All major operating systems.', 'All major operating systems.'];
        $virusSymptoms = ['Unexpected system behavior, unauthorized access.', 'Rapid spread, network congestion', 'Encrypted files, ransom demand.', 'Slow system performance, unauthorized data collection.', 'Excessive and intrusive advertisements.', 'Hidden presence, privilege escalation.', 'Unauthorized access to sensitive information.', ' Unusual network activity, slow internet connection.', 'Altered browser settings, unwanted redirects.', 'Difficult to detect, uses system tools.', 'Unusual behavior, excessive data usage.', 'Unwanted pop-ups, slow performance.', 'Unusual system behavior, unauthorized access.', 'Alters files in memory, slows down system.', 'Alters macro scripts in documents.'];
        $virusDistributionMethod = ['Disguised as legitimate software or attachments.', 'Exploits vulnerabilities to spread across networks.', 'Malicious email attachments, compromised websites.', 'Bundled with free software, malicious websites.', 'Bundled with free software, malicious websites.', 'Exploits vulnerabilities.', ' Malicious websites, bundled with software.', 'Exploits vulnerabilities, malicious downloads.', 'Bundled with software, malicious websites.', 'Exploits vulnerabilities, phishing.', 'Malicious apps, phishing.', 'Malicious downloads, email attachments.', 'Exploits vulnerabilities, malicious scripts.', 'Infected files, email attachments.', 'Infected documents, email attachments.'];
        $virusPrevention = ['Avoid downloading software from untrusted sources.', 'Keep operating systems and software updated.', 'Regularly back up important files, be cautious with email attachments.', 'Use reputable antivirus and anti-spyware tools.', 'Be cautious with free software downloads.', ' Regularly update operating systems and security software.', 'Use anti-keylogger tools, be cautious with downloads.', 'Keep systems updated, use firewalls.', 'Be cautious with software installations.', 'Regularly update security software.', 'Download apps from official stores, use security apps.', 'Be cautious with downloads, use antivirus for Mac.', 'Regularly update software, use security tools.', 'Use real-time antivirus protection.', 'Disable macros in documents from unknown sources.'];
        $virusRemoval = ['Use reputable antivirus software to scan and remove.', 'Isolate infected devices, use antivirus software.', 'Use antivirus software, restore from backup.', 'Use anti-spyware software, regularly scan for malware.', 'Use adware removal tools, manage browser extensions.', 'Use specialized rootkit removal tools.', 'Use antivirus and anti-keylogger tools.', 'Use antivirus and anti-botnet tools.', 'Reset browser settings, use anti-malware tools.', 'Use advanced antivirus tools, conduct thorough system scans.', 'Uninstall suspicious apps, use mobile antivirus.', 'Use Mac-specific antivirus tools, remove malicious files.', 'Use antivirus and anti-malware tools, remove malicious files.', 'Use antivirus software with memory scanning capabilities.', 'Scan and clean infected documents using antivirus.'];

        for ($i = 0; $i < count($virusName); $i++) {
            \App\Models\Virus::factory()->create([
                'name' => $virusName[$i],
                'type' => $virusType[$i],
                'danger_level' => $virusDangerLevel[$i],
                'affected_platform' => $virusAffectedPlatform[$i],
                'symptoms' => $virusSymptoms[$i],
                'distribution_method' => $virusDistributionMethod[$i],
                'prevention' => $virusPrevention[$i],
                'removal' => $virusRemoval[$i],
            ]);
        }

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'email_verified_at' => now(),
        ]);


        // \App\Models\Virus::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}




// Sample data (you can replace this with your own arrays)
// $list1 = [1, 2, 3, 4];
// $list2 = ['a', 'b', 'c', 'd'];
// $list3 = ['apple', 'banana', 'cherry', 'date'];

// // Use array_map to iterate through the lists simultaneously
// $result = array_map(function ($item1, $item2, $item3) {
//     // Do something with the items
//     echo "Item1: $item1, Item2: $item2, Item3: $item3\n";
// }, 