=========================================
      VOLOX FINAL - STEP BY STEP
=========================================

1. CARA MENYALAKAN (START UP)
-----------------------------
TAB 1 (Server PHP):
   cd ~/volox_final
   proot -0 php -S 127.0.0.1:8080

TAB 2 (Tunnel Ke Publik):
   cloudflared tunnel --url http://127.0.0.1:8080
   * Ambil link baru yang muncul di baris "Visit it at".

TAB 3 (Monitoring Real-Time):
   cd ~/volox_final
   tail -f vault.txt
Short cut:
cat <<EOF > ~/mulai.sh
#!/data/data/com.termux/files/usr/bin/bash
cd ~/volox_final
echo "Menjalankan Server PHP..."
proot -0 php -S 127.0.0.1:8080
EOF
chmod +x ~/mulai.sh

cat <<EOF > ~/pantau.sh
#!/data/data/com.termux/files/usr/bin/bash
cd ~/volox_final
echo "Menunggu data masuk (CTRL+C untuk stop)..."
tail -f vault.txt
EOF
chmod +x ~/pantau.sh


2. CARA MEMATIKAN (SHUT DOWN)
-----------------------------
- Tekan CTRL + C di semua Tab.
- Klik "Exit" di notifikasi Termux.

3. CARA CEK HASIL PANEN
-----------------------
- Manual: cat ~/volox_final/vault.txt
- Copy ke HP: cp ~/volox_final/vault.txt /sdcard/Download/hasil.txt

4. CATATAN PENTING
------------------
- Link Cloudflare BERUBAH setiap kali restart Tab 2.
- Selalu klik "Acquire Wake Lock" di notifikasi agar server tidak mati.
- File web ada di index.html, skrip data ada di post.php.

=========================================
